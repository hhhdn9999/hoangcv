<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:100,400|Raleway:100');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

$color: #2DB27E;

body {
  font-family: Roboto;
  padding: 0;
  margin: 0;
  background-color: rgba(0,0,0,.1);
}
a {
  text-decoration: none;
  color: #000;
}

ul {
  margin: 0;
  padding: 0;
}

.flex { display: flex; }
.flex-wrap { flex-wrap: wrap; }
.col-left { flex-basis: 60%; }
.col-right { 
  flex-basis: 40%; 
  margin-left: 20px;
}
.right { text-align: right; }

.page {
  padding: 50px;
  margin: 50px;
  background-color: #FFF;
  box-shadow: rgba(0,0,0,.3) 1px 1px 10px;
}

h1, h2 {
  text-transform: uppercase;
  font-size: 3.3em;
  margin: 0;
}

h2 {
  margin-top: 20px;
  font-size: 2em;
  border-bottom: 4px solid;
}

h3 {
  font-size: 1.5em;
  font-family: Raleway;
  margin-bottom: 0;
}

h4 {
  margin: 10px 0 6px;
  font-size: 1.2em;
  color: $color;
}


section.title {
  padding-bottom: 10px;
  .role{
    color: $color;
    font-size: 2em;
  }
}

section.photo {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
  float: right;
  
  img {
    width: 200px;
    position: absolute;
    left: 0;
    top: -65px;
  }
}

section.contact ul {
  list-style: none;
  padding: 0;
  
  li {
    float:left;
    display:inline;
    width: 50%;
    padding: 4px 0;
    font-weight: bold;
    
    i {
      color: $color;
      padding: 0 3px;
      width: 15px;
      text-align: center;
    }
  }
}

section .item {
  padding-bottom: 20px;
  margin-right: 10px;
  border-bottom: 2px dashed rgba(0,0,0,.2);
}

section.languages {
  .item { 
    display: flex; 
    padding-bottom: 0;
  }
  h4 { 
    flex-grow: 1; 
    margin: 14px 0 0 0;
  }
  p { color: rgba(0, 0, 0, .5); }
}

.when, .where {
  font-weight: 100;
  font-size: 10pt;
  padding: 0 15px 10px 0;
}

.text {
  font-size: 11pt;  
  
  p {
    margin: 0;
  }
  
  ul { 
    padding: 0 0 0 25px; 
    margin: 0;
  }
}

.item.progress {
  width: calc(50% - 10px);
}

ul.progress {
  
  li {
    -webkit-print-color-adjust: exact;
    display: inline-block;
    width: calc(10% - 4px);
    height: 7px;
    background-color: #000;
    border: 1px solid;
    border-radius: 5px;
    box-sizing: border-box;
    
    &.active {
      background-color: $color;
      border-color: $color;
    }
  }
}

ul.box {
  li {
    display: inline-block;
    border: 1px solid;
    padding: 2px 4px;
    margin: 0 2px 5px 0;
  }
  
}

@media print {
  .page {
    margin: 0;
    padding: 2px;
    box-shadow: none;
  }
  h1 {font-size: 2em;}
  h2 {font-size: 1.5em;}
  h3 {margin: 4px 0 0 0;}
  h4 {margin: 2px 0 2px 0}
  
  section.photo {
    width: 150px;
    height: 150px;
  
    img {
      width: 160px;
      position: absolute;
      left: -10px;
      top: -50px;
    }
  }

  section .item {
    padding-bottom: 5px;
  }
}
    </style>
</head>
<body>
    <div class="page">
        <header class="flex">
          <div class="col-left">
            <section class="title">
              <h1>Fernando Falci</h1>
              <span class="role">Javascript Developer</span>
            </section>
            <section class="contact">
              <ul>
                <li>
                  <i class="fa fa-phone"></i>
                  <a href="tel:+34611231876">+34 611 231 876</a>
                </li>
                <li>
                  <i class="fa fa-link"></i>
                  <a href="https://falci.me">https://falci.me</a>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:contact@falci.me">contact@falci.me</a>
                </li>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <a href="https://www.google.com/maps/search/Barcelona,+Spain">Barcelona, Spain</a>
                </li>
              </ul>
            </section>
          </div>
          <div class="col-right right">
            <section class="photo">
              <img src="https://falci.me/me.jpeg" alt="Fernando Falci">
            </section>
          </div>
        </header>
        
        <div class="flex">
          <div class="col-left">
            <section>
              <h2>Experience</h2>
      
              <div class="item">
                <h3>Frontend Developer</h3>
                <h4>eDreams ODIGEO</h4>
                <div class="flex">
                  <div class="when"><i class="fa fa-calendar"></i> Jul, 2017 - ongoing</div>
                  <div class="where"><i class="fa fa-map-marker"></i> Barcelona, Spain</div>
                </div>
                <div class="text">
                  <p>eDreams ODIGEO is one of the world's largest online travel companies and one of the largest European e-commerce businesses.</p>
                </div>
              </div>
      
              <div class="item">
                <h3>Web Developer</h3>
                <h4>MATERA Systems</h4>
                <div class="flex">
                  <div class="when"><i class="fa fa-calendar"></i> Nov, 2014 - Jun, 2017</div>
                  <div class="where"><i class="fa fa-map-marker"></i> Maringá/PR, Brazil</div>
                </div>
                <div class="text">
                  <p>MATERA is focused on financial software solutions.</p>
                  <ul>
                    <li>Improved the team skills by giving 3 lectures</li>
                    <li>Defined the code standards used by 10 + projects</li>
                    <li>At the front-end was able design and architect a major video on demand application</li>
                  </ul>
                </div>
              </div>
      
              <div class="item">
                <h3>Team Leader/Developer</h3>
                <h4>Mobile DI</h4>
                <div class="flex">
                  <div class="when"><i class="fa fa-calendar"></i> Dec, 2015 - ongoing</div>
                  <div class="where"><i class="fa fa-globe"></i> Remote</div>
                </div>
                <div class="text">
                  <p>Mobile solutions for the moderns digital economy</p>
                  <ul>
                    <li>Lead a team of 5 developers</li>
                    <li>Decided the best technology to use on 3 projects</li>
                    <li>Worked on 6 different projects/stacks</li>
                  </ul> 
                </div>
              </div>
            </section>
            
            <section>
              <h2>Education</h2>
              <div class="item">
                <h3>B.S. Analysis and Software Development</h3>
                <h4>Unipar</h4>
                <div class="flex">
                  <div class="when"><i class="fa fa-calendar"></i> 2007 - 2009</div>
                  <div class="where"><i class="fa fa-map-marker"></i> Brazil</div>
                </div>
              </div>
            </section>
            
            <section>
              <h2>Skills</h2>
              <div class="flex flex-wrap">
                <div class="item progress">
                  <h4>Leadership</h4>
                  <ul class="progress">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
                <div class="item progress">
                  <h4>Javascript / ES6</h4>
                  <ul class="progress">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                  </ul>
                </div>
                <div class="item progress">
                  <h4>Java</h4>
                  <ul class="progress">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
                <div class="item progress">
                  <h4>Database</h4>
                  <ul class="progress">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          
          <div class="col-right">
            <section>
              <h2>Certificates</h2>
              <div class="item">
                <h4>HTML5, CSS3 and Javascript</h4>
                <div class="text">
                  <p>Microsoft</p>
                </div>
              </div>
              
              <div class="item">
                <h4>Java 8 Associate</h4>
                <div class="text">
                  <p>Oracle</p>
                </div>
              </div>
            </section>
            
            <section class="languages">
              <h2>Languages</h2>
              <div class="item">
                <h4>Englsih</h4>
                <p>Advanced</p>
              </div>
              <div class="item">
                <h4>Spanish</h4>
                <p>Beginner</p>
              </div>
              <div class="item">
                <h4>Portuguese</h4>
                <p>Native</p>
              </div>
            </section>
            
            <section>
              <h2>Technologies</h2>
              
              <div class="item">
                <h4>Frontend</h4>
                <ul class="box">
                  <li>Javascript/ES6/ES7</li>
                  <li>HTML5</li>
                  <li>CSS/SASS/LESS</li>
                  <li>AngularJS 1/4</li>
                  <li>jQuery</li>
                  <li>Bower</li>
                  <li>Gulp</li>
                </ul>
              </div>
              
              <div class="item">
                <h4>Backend</h4>
                <ul class="box">
                  <li>NodeJS</li>
                  <li>Java</li>
                  <li>Spring</li>
                  <li>Maven</li>
                  <li>NPM</li>
                  <li>REST</li>
                </ul>
              </div>
              
              <div class="item">
                <h4>General</h4>
                <ul class="box">
                  <li>Microservices</li>
                  <li>GIT</li>
                  <li>Unit testing</li>
                  <li>AWS</li>
                  <li>TDD</li>
                  <li>Docker</li>
                  <li>Agile</li>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div>
</body>
</html>
