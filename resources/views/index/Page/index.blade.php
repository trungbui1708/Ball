
@extends('index.layout.index')
@section('content')
        
        <!-- All news area Start Here-->
        <div class="all-news-area sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="">Tin mới</h3>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="latest-news-slider">
                                    @foreach($news as $key)
                                        <?php
                                            $data = $key->images -> sortByDesc('created_at')->take(3);
                                            $post = $data -> shift();
                                         ?>
                                    <div> 
                                        <div class="news-normal-block">
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="upload/news/{{$post['name']}}" alt="" />
                                                </a>
                                            </div>
                                            <h4 class="news-title"><a href="news/{{$key->id}}">{{$key->tittle}}</a></h4>
                                            <div class="news-desc">
                                                <p>
                                                   {{$key->description}}
                                                </p>
                                            </div>
                                            <div class="news-btn">
                                                <a class="primary-btn" href="news/{{$key->id}}">Đọc tiếp</a>
                                            </div>
                                        </div>                             
                                        </div>
                                         @endforeach
                                    
                                </div>                              
                            </div>
                            <div class="col-sm-3">                              
                                <div class="latest-news-nav">
                                   @foreach($news as $key)
                                        <?php
                                            $data = $key->images -> sortByDesc('created_at')->take(3);
                                            $post = $data -> shift();
                                         ?>
                                    <div>
                                        <img src="{{ asset('upload/news/'.$post['name'])}}" alt="" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar-area right-side-area">
                            <h3 class="title-bg">last match results</h3>
                            <div class="today-match-teams text-center">
                                <div class="overly-bg"></div>
                                <div class="title-head">
                                    <h4>championship quarter finals</h4>
                                    <span class="date">Sunday, March 20th,2017</span>
                                </div>
                                <div class="today-score">
                                    <div class="today-match-team">
                                        <img src="index/images/today-match/1.png" alt="" />
                                        <h4>Trisal King</h4>
                                        <span>SKFC</span>
                                    </div>
                                    <div class="today-final-score">
                                        07 <span>-</span> 02
                                        <h4>final score</h4>
                                    </div>
                                    <div class="today-match-team">
                                        <img src="index/images/today-match/2.png" alt="" />
                                        <h4>Mirpur King</h4>
                                        <span>SWFC</span>
                                    </div>
                                </div>
                                <div class="today-results-table">
                                    <table>
                                        <tbody>
                                            <tr>
                                                 <td class="tb-title">Scoreboard</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>3</td>
                                                 <td>4</td>
                                                 <td>T</td>
                                            </tr>
                                            <tr>
                                                 <td class="tb-title">Banani FC</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>3</td>
                                                 <td>4</td>
                                                 <td>T</td>
                                            </tr>
                                            <tr>
                                                 <td class="tb-title">Trishal FC</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>3</td>
                                                 <td>4</td>
                                                 <td>T</td>
                                            </tr>
                                            <tr>
                                                 <td class="tb-title">Dhoar FC</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>3</td>
                                                 <td>4</td>
                                                 <td>T</td>
                                            </tr>
                                            <tr>
                                                 <td class="tb-title">Joypur FC</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>3</td>
                                                 <td>4</td>
                                                 <td>T</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="view-score"><a href="point-table.html">View All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator-100"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-8 col-xs-8 match-view-tite">
                                <h3 class="title-bg">Match fixture</h3>
                            </div>
                            <div class="col-sm-4 col-xs-4 text-right match-view-more">
                                <a class="view-more" href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="match-list mmb-45">
                                    <div class="overly-bg"></div>
                                    <table class="match-table">
                                        <tbody>
                                            <tr>
                                                 <td class="medium-font">Nettrok FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">men utd</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Golshan Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Kapa FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Dhoar FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Trishal FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Banani FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Badda Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Badda FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Nattrok Fc</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title-bg">Point table</h3>
                        <div class="point-list text-center">
                            <table class="point-table">
                                <tbody>
                                    <tr>
                                         <td></td>
                                         <td class="country-name">Team</td>
                                         <td>W</td>
                                         <td>L</td>
                                         <td>P</td>
                                    </tr>
                                    <tr>
                                         <td>01</td>
                                         <td>Badda FC</td>
                                         <td>16</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>02</td>
                                         <td class="country-name">Banani FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>28</td>
                                    </tr>
                                    <tr>
                                         <td>03</td>
                                         <td class="country-name">Trishal FC</td>
                                         <td>18</td>
                                         <td>8</td>
                                         <td>26</td>
                                    </tr>
                                    <tr>
                                         <td>04</td>
                                         <td>Dhoar FC</td>
                                         <td>15</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>05</td>
                                         <td class="country-name">Kapa FC</td>
                                         <td>22</td>
                                         <td>4</td>
                                         <td>25</td>
                                    </tr>
                                    <tr>
                                         <td>06</td>
                                         <td class="country-name">Mirpur FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>27</td>
                                    </tr>
                                    <tr>
                                         <td>07</td>
                                         <td class="country-name">Joypur FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>08</td>
                                         <td class="country-name">Bogro FC</td>
                                         <td>17</td>
                                         <td>6</td>
                                         <td>30</td>
                                    </tr>
                                    <tr>
                                         <td>09</td>
                                         <td class="country-name">Bramma FC</td>
                                         <td>16</td>
                                         <td>8</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>10</td>
                                         <td class="country-name">Nattrok FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>24</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="view-more text-left" href="point-table.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All news area end Here-->
        
        <!-- Latest Video Start Here-->
        <div class="latest-video-section sec-spacer">
            <div class="overly-bg"></div>
            <div class="container">
                <h3 class="title-bg">Latest video</h3>
                <div class="row">
                    <div class="col-md-8">
                        <div class="video-area mmb-40">
                            <img src="index/images/latest-video/video.jpg" alt="Video"/>
                            <div class="videos-icon">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=t17O6JoU2Ew">
                                <i class="fa fa-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-news">
                        <div class="inner-news small-news">
                            <div class="news-img">
                                <a href="blog-single.html"><img src="index/images/latest-video/1.jpg" alt="News" /></a>
                            </div>
                            <div class="news-text">
                                <h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
                                <span class="date">May 30, 2017</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="inner-news small-news">
                            <div class="news-img">
                                <a href="blog-single.html"><img src="index/images/latest-video/2.jpg" alt="News" /></a>
                            </div>
                            <div class="news-text">
                                <h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
                                <span class="date">May 30, 2017</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="inner-news small-news">
                            <div class="news-img">
                                <a href="blog-single.html"><img src="index/images/latest-video/3.jpg" alt="News" /></a>
                            </div>
                            <div class="news-text">
                                <h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
                                <span class="date">May 30, 2017</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Video end Here-->
        
        <!-- Our Team Start Here-->
        <div class="our-team-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <h3 class="title-bg">Top players</h3>
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="our-team">
                                <img src="index/images/team/2.jpg" alt="" />
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Eyamin Hossain</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1988</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Forward</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="index/images/team/3.jpg" alt="" />
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Istiak Ahmed</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1988</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Goalkeeper</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="our-team">
                                <img src="index/images/team/1.jpg" alt="" />
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Masud Rana</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>July 21, 1994</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>striker</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>10</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="index/images/team/4.jpg" alt="" />
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Forhad Ali</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1985</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Defender</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="index/images/team/5.jpg" alt="" />
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Mahabub Alam</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1980</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Defender</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="index/images/team/6.jpg" alt="" />
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Abdur Rashid</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1988</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>striker</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 best-player">
                        <h3 class="title-bg">Our Polls</h3>
                        <div class="best-footballer">
                            <h4>Who is the best footballer in 2018</h4>
                            <ul id="player-list">
                                <li>
                                    <input type="radio" id="player1" name="player" value="1"> 
                                    <span>Abdur Rashid</span>
                                </li>
                                <li>
                                    <input type="radio" id="player2" name="player" value="2"> 
                                    <span>Mahabub Alam</span>
                                </li>
                                <li>
                                    <input type="radio" id="player3" name="player" value="3"> 
                                    <span>Istiak Ahmed</span>
                                </li>
                                <li>
                                    <input type="radio" id="player4" name="player" value="4"> 
                                    <span>Riaz Ahmed</span>
                                </li>
                                <li>
                                    <input type="radio" id="player5" name="player" value="5"> 
                                    <span>Deluar Hosen</span>
                                </li>
                            </ul>
                            <div class="submit-area">
                                <input type="button" name="vote" value="Vote" class="btn btn1">
                                <input type="button" name="view" value="View Results" class="btn btn2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Team end Here-->
        
        <!-- Gallery Section Start Here-->
        <div class="gallery-section-area pb-70">
            <div class="container" id="grid">
                <h3 class="title-bg">match gallery</h3>
                <div id="gallery-items">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-gallery">
                                <img src="index/images/gallery2/1.jpg" alt="" />
                                <div class="heading-conent">
                                    <h4>Photo Title Here</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images/gallery2/1.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-gallery">
                              <img src="index/images/gallery2/2.jpg" alt="" />
                                <div class="heading-conent">
                                    <h4>Photo Title Here</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images/gallery2/2.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">    
                            <div class="single-gallery">
                              <img src="index/images/gallery2/3.jpg" alt="" />
                                <div class="heading-conent">
                                    <h4>Photo Title Here</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="index/images/gallery2/3.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-gallery">
                              <img src="index/images/gallery2/4.jpg" alt="" />
                                <div class="heading-conent">
                                    <h4>Photo Title Here</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="index/images/gallery2/4.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-gallery">
                              <img src="images/gallery2/5.jpg" alt="" />
                                <div class="heading-conent">
                                    <h4>Photo Title Here</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="index/images/gallery2/5.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-gallery">
                              <img src="index/images/gallery2/6.jpg" alt="" />
                                <div class="heading-conent">
                                    <h4>Photo Title Here</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="index/images/gallery2/6.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Gallery Section End Here-->
        
        <!-- Champion Awards Start Here-->
        <div class="champion-awards-section sec-spacer">
            <div class="overly-bg"></div>
            <div class="container">
                <h3 class="title-bg">champion awards</h3>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="1500" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="champion-list">
                        <img src="index/images/awards/1.png" alt="" />
                        <div class="awards-content">
                            <h4 class="awards-title">Club 2017 champion</h4>
                        </div>
                    </div>
                    <div class="champion-list">
                        <img src="index/images/awards/2.png" alt="" />
                        <div class="awards-content">
                            <h4 class="awards-title">Club 2017 champion</h4>
                        </div>
                    </div>
                    <div class="champion-list">
                        <img src="index/images/awards/3.png" alt="" />
                        <div class="awards-content">
                            <h4 class="awards-title">Club 2017 champion</h4>
                        </div>
                    </div>
                    <div class="champion-list">
                        <img src="index/images/awards/4.png" alt="" />
                        <div class="awards-content">
                            <h4 class="awards-title">Club 2017 champion</h4>
                        </div>
                    </div>
                    <div class="champion-list">
                        <img src="index/images/awards/3.png" alt="" />
                        <div class="awards-content">
                            <h4 class="awards-title">Club 2017 champion</h4>
                        </div>
                    </div>
                    <div class="champion-list">
                        <img src="index/images/awards/4.png" alt="" />
                        <div class="awards-content">
                            <h4 class="awards-title">Club 2017 champion</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Champion Awards end Here-->
        
        <!-- Our Products Start Here-->
        <div class="our-products-section sec-spacer">
            <div class="container">
                <h3 class="title-bg">Top Products</h3>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="images/product/1.jpg" alt="Product" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="shop-single.html">Product Title Here</a>
                                <span>$55.00</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="images/product/2.jpg" alt="Product" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="shop-single.html">Product Title Here</a>
                                <span>$55.00</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="images/product/3.jpg" alt="Product" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="shop-single.html">Product Title Here</a>
                                <span>$55.00</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="images/product/4.jpg" alt="Product" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="shop-single.html">Product Title Here</a>
                                <span>$55.00</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="images/product/3.jpg" alt="Product" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="shop-single.html">Product Title Here</a>
                                <span>$55.00</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="images/product/4.jpg" alt="Product" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="shop-single.html">Product Title Here</a>
                                <span>$55.00</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Products end Here-->

        <!-- Testimonials Sections Start Here-->
        <div class="testimonial-section pb-100">
            <div class="container">
                <h3 class="title-bg">Testimonials</h3>
                <div class="row">
                    <div class="col-md-12">
                            <div id="testimonial-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-autoplay-timeout="6000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="testimonial">
                                <div class="testimonial-profile">
                                    <a href="#"><img src="images/testimonial/tom.jpg" alt="tom"></a>
                                </div>
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title">Tom Williamson</h3>
                                    <span class="testimonial-post">Office Manager</span>
                                    <div class="client-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> 
                                    </div>
                                    <p class="testimonial-description">
                                        Praesent condimentum augue lorem, id commodo ex aliquet vel. Donec mi quam, mattis in dolor non, volutpat placerat ipsum. Donec varius ex non nulla hendrerit, a posuere lectus semper
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-profile">
                                    <a href="#"><img src="images/testimonial/peter.jpg" alt=""></a>
                                </div>
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title">William Peter</h3>
                                    <span class="testimonial-post">CEO Founder </span>
                                    <div class="client-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> 
                                    </div>
                                    <p class="testimonial-description">
                                        Etiam et dolor venenatis, suscipit ex a, interdum augue. Maecenas in lectus sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    </p>
                                </div>
                            </div> 
                            <div class="testimonial">
                                <div class="testimonial-profile">
                                    <a href="#"><img src="images/testimonial/lan.jpg" alt="Ian"></a>
                                </div>
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title">Ian Kristian</h3>
                                    <span class="testimonial-post">Office Manager</span>
                                    <div class="client-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> 
                                    </div>
                                    <p class="testimonial-description">
                                        Sed condimentum viverra tellus, at cursus massa. Praesent tristique gravida elit, in fermentum ligula varius id. Vivamus commodo malesuada elit. Cras non iaculis enim.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Sections End Here-->

        <!-- Client Logo Section Start Here-->
        <div class="clicent-logo-section sec-spacer">
            <div class="overly-bg"></div>
            <div class="container">
                <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/2.png" alt=""></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/3.png" alt=""></a>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Logo Section End Here-->
        @endsection