<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>hhhdn9999</title>
</head>
<body>
    @isset($users)
    <div class="profile" style="position: fixed;">
		<div class="pic">
			<img src="{{$users->profile_photo_path}}" class="photo" width="100%" alt="photo">
		</div>
		
		<ul>
            <li>
                <img src="https://res.cloudinary.com/omoriones/image/upload/v1471695288/codepen.png" class="icons" alt="codepenIcon">
                    {{$users->name}}
                </li>
			<li>  
			<img src="https://res.cloudinary.com/omoriones/image/upload/v1471695288/location.png" class="icons" alt="locationIcon">
                {{$users->address}}
			</li>
			<li>
			<img src="https://res.cloudinary.com/omoriones/image/upload/v1471695288/phone.png" class="icons" alt="phoneIcon">
                {{$users->phone}}
			</li>
			<li>
			<img src="https://res.cloudinary.com/omoriones/image/upload/v1471695288/mail.png" class="icons" alt="mailIcon">
			    {{$users->email}}
            </li>
		</ul>

	</div>
	
	<div class="description">

        <div class="cv-row">
            <div class="cv-wrap">
              <div class="cv-name" style="text-align: center">Web Developer</div>
              <div class="cv-content">
                <div class="head-title">#cv</div>
                <div class="cv-content-item">
                    <div class="title">Giới thiệu bản thân </div>
                    <div class="exprecince">{{$users->introduce_myself}}</div>
                  </div>
                <div class="cv-content-item">
                  <div class="title">Mục tiêu nghề nghiệp</div>
                  <div class="exprecince">{{$users->muctieu_nghenghiep}}</div>
                </div>
                <div class="cv-content-item">
                  <div class="title">Học vấn</div>
                  <div class="head-title">Thời gian học tập 09/2017 - 06/2021 </div>
                  <div class="exprecince">{{$users->hocvan}}</div>
                </div>
                <div class="cv-content-item">
                  <div class="title">Kinh nghiệm làm việc</div>
                  <div class="exprecince">{{$users->kinhnghiem_lamviec}}</div>
                </div>
                <div class="cv-content-item">
                    <div class="title">Các dự án cá nhân</div>
                    <div class="exprecince">{{$users->cac_du_an_canhan}}</div>
                </div>
                <div class="cv-content-item">
                    <div class="title">Kỹ năng chuyên môn</div>
                    <div class="exprecince">{{$users->ky_nang_chuyen_mon}}</div>
                </div>
                <div class="cv-content-item">
                    <div class="title">Một số thông tin khác</div>
                    <div class="exprecince">{{$users->mot_so_thong_tin_khac}}</div>
                </div>


                
        
              </div>
            </div>
            <div class="cv-wrap">

                <div class="cv-content-item">
                    <div class="title">Vị trí muốn ứng tuyển
                    </div>
                    <div class="exprecince">
                      <div class="exprecince">{{$users->vitriungtuyen}}</div>
                    </div>
                    <br>

                <div class="cv-content-item">
                    <div class="title">Ngôn ngữ lập trình
                    </div>
                    <div class="exprecince">
                        <div class="exprecince">{{$users->language}}</div>
                    </div>
                    <div class="cv-content-item">
                        <div class="title">-----------------------------------------
                        </div>
                        <div class="exprecince">
                          <div class="exprecince">Webserve : Apache , Xampp, Lampp</div>
                          <div class="exprecince">MySql</div>
                          <div class="exprecince">HTML</div>
                          <div class="exprecince">CSS </div>
                          <div class="exprecince">JAVASCRİPT</div>
                          <div class="exprecince">jQuery</div>
                          <div class="exprecince">AJAX</div>
                          <div class="exprecince">Git</div>
                          <div class="exprecince">Bootstrap</div>
                          <div class="exprecince">SharePoint</div>
                          <div class="exprecince">PowerShell</div>
                        </div>
                        <br>
              <div class="cv-content-item">
                <div class="title">Hệ điều hành
                </div>
                <div class="exprecince">
                  <div class="exprecince">{{$users->hedieuhanh}}</div>
              </div>
              <br>
              <div class="cv-content-item">
                <div class="title">Tool
                </div>
                <div class="exprecince">
                  <div class="exprecince">{{$users->tool}}</div>
              </div>
              <br>
              <div class="cv-content-item">
              </div>
        
              </div>
              <div class="cv-social">
                <a href="#" title="Github">
                  <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"></path>
                  </svg>
        
                </a>
                <a href="#" title="Codepen">
                  <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
                    <path d="M12 2l10 6.5v7L12 22 2 15.5v-7L12 2z"></path>
                    <path d="M12 22v-6.5"></path>
                    <path d="M22 8.5l-10 7-10-7"></path>
                    <path d="M2 15.5l10-7 10 7"></path>
                    <path d="M12 2v6.5"></path>
                  </svg></a> <a href="#" title="Linkedin">
                  <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
                    <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"></path>
                    <path d="M2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2"></circle>
                  </svg></a>
                <a href="#" title="İnstagram">
                  <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
                    <path d="M17.5 6.5h.01"></path>
                  </svg>
                </a>
                <a href="#" title="Medium">
                  <svg fill="currentColor" width="30px" height="30px" viewBox="0 0 15 15">
                    <g>
                      <path d="M1.79062 2.44688C1.80938 2.2625 1.7375 2.07812 1.6 1.95313L0.190625 0.253125L0.190625 0L4.57188 0L7.95937 7.42812L10.9375 0L15.1156 0L15.1156 0.253125L13.9094 1.40937C13.8062 1.4875 13.7531 1.61875 13.775 1.74687L13.775 10.2469C13.7531 10.375 13.8062 10.5063 13.9094 10.5844L15.0875 11.7406L15.0875 11.9937L9.15938 11.9937L9.15938 11.7406L10.3813 10.5562C10.5 10.4375 10.5 10.4 10.5 10.2188L10.5 3.35L7.10313 11.9719L6.64375 11.9719L2.69375 3.35L2.69375 9.12812C2.65937 9.37187 2.74063 9.61563 2.9125 9.79062L4.5 11.7156L4.5 11.9687L0 11.9687L0 11.7188L1.5875 9.79062C1.75625 9.61563 1.83438 9.36875 1.79062 9.12812L1.79062 2.44688Z"></path>
                    </g>
                  </svg>
                </a>
        
              </div>
            </div>
        
          </div>

    </div>
    @endisset
</body> 
</html>
