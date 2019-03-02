<?php $__env->startSection('content'); ?>
	<!-- Home Blog Start Here -->
        <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row"> 
                	<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $data = $key->images -> sortByDesc('created_at')->take(3);
                                            $post = $data -> shift();
                                         ?>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
							<a href="news/<?php echo e($key->id); ?>">
								<img  src="upload/news/<?php echo e($post['name']); ?>" alt="Blog Image" />
							</a>                      
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> <?php echo e($key->created_at); ?></span>
                                <h3><a href="news/<?php echo e($key->id); ?>"><?php echo e($key->tittle); ?> </a></h3>
                                <p><?php echo e($key->description); ?></p>
                                <!-- <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div> -->
                            </div>
						</div> 
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
					
					<!-- <div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/2.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">United We Stand, United We Write </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/3.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">The Award Winning Trishal FC Blog and News Site  </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/4.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">The Award Winning Trishal FC Blog and News Site  </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/5.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">We're Pretty Big Fans of FC Club  </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/6.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Latest Football Statistics For The Premier League </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/7.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Everything In Soccer Starts Right Here  </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/8.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Everything In Soccer Starts Right Here  </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/9.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Professional Soccer Coaching Advice</a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/10.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Get the Latest Club United News  </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/11.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Howler is a Magazine About Soccer </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="blog-single.html"><img src="images/blog/12.jpg" alt="Blog Image"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2017</span>
                                <h3><a href="blog-single.html">Howler is a Magazine About Soccer </a></h3>
                                <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
						</div> 
					</div> 
                </div> -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="default-pagination text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Blog End Here -->
        
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>