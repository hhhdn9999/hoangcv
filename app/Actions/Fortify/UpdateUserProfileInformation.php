<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'profile_photo_path' => $input['profile_photo_path'],
                'introduce_myself' => $input['introduce_myself'],
                'language' => $input['language'],
                'helper_language' => $input['helper_language'],
                'vitriungtuyen' => $input['vitriungtuyen'],
                'hedieuhanh' => $input['hedieuhanh'],
                'tool' => $input['tool'],
                'git' => $input['git'],
                'facebook' => $input['facebook'],
                'blog' => $input['blog'],
                'youtube' => $input['youtube'],
                'zalo' => $input['zalo'],
                'phone' => $input['phone'],
                'address' => $input['address'],
                'muctieu_nghenghiep' => $input['muctieu_nghenghiep'],
                'hocvan' => $input['hocvan'],
                'kinhnghiem_lamviec' => $input['kinhnghiem_lamviec'],
                'cac_du_an_canhan' => $input['cac_du_an_canhan'],
                'ky_nang_chuyen_mon' => $input['ky_nang_chuyen_mon'],
                'mot_so_thong_tin_khac' => $input['mot_so_thong_tin_khac'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
