<div class="container-fluid">
    <div class="header">
        <div class="header-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('/images/logo.png') }}" alt="logo"></a>
        </div><!--header-logo-->
        <div class="menu">
            <x-menu :menu="$menu" />
        </div><!--menu-->
        <div class="navbar-right">
            <div class="inside">
                <div class="header-search">
                    <a href="#" class="search-btn"><i class="fa fa-search"></i></a>
                    <form>
                        <input type="text" value="" placeholder="{{ __('navbar.search') }}" autocomplete="off" name="s">
                    </form>
                    <i class="close-search">x</i>
                </div><!--header-search-->
                <div class="wishlist">
                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div><!--wishlist-->
                <div class="shopping-cart">
                    <a href="#">
								<span class="cart-bag">
									<i class="bag"></i>
								</span>
                        <span class="total">$899.98</span>
                    </a>
                    <div class="cart-popup-container">
                        <p>Recently added item(s)</p>
                        <ul>
                            <li>
                                <a href="#" class="pull-left"><img src="https://picsum.photos/60/80" alt="cart-img"></a>
                                <h4><a href="#">light man modern elegant suit</a></h4>
                                <span class="price">1 x $499,99</span>
                                <a href="#" class="remove">x</a>
                            </li>
                            <li>
                                <a href="#" class="pull-left"><img src="https://picsum.photos/60/80" alt="cart-img"></a>
                                <h4><a href="#">light man modern elegant suit</a></h4>
                                <span class="price">1 x $499,99</span>
                                <a href="#" class="remove">x</a>
                            </li>
                        </ul>
                        <div class="cart-subtotal">
                            <span>cart sub-total: <span class="price">$899,98</span></span>
                        </div><!--cart-subtotal-->
                        <div class="buttons">
                            <a href="#" class="btn">checkout</a>
                            <a href="#" class="btn view-cart">view cart</a>
                        </div><!--buttons-->
                    </div><!--cart-popup-container-->
                </div><!--shopping-cart-->
                <button class="btn-hamburger js-slideout-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div><!--navbar-right-->
    </div><!--header-->
</div>
<div class="container-fluid fixed-header">
    <div class="header">
        <div class="header-logo">
            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
        </div><!--header-logo-->
        <div class="menu">
            <menu>
                <li class="active menu-parent-item"><a href="index.html">Home</a></li>
                <li data-toggle="modal" data-target="#demo"><a href="#">Demos</a></li>
                <li class="menu-parent-item">
                    <a href="shop.html">Shop</a>
                    <div class="nav-sublist-dropdown columns-3">
                        <ul>
                            <li><a href="#" class="title">Shop Layouts</a></li>
                            <li><a href="without-sidebar.html">Without sidebar</a></li>
                            <li><a href="right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="shop.html">Shop Slideshow</a></li>
                            <li><a href="full-width-grid.html">Full Width Grid</a></li>
                            <li><a href="columns-2.html">2 columns</a></li>
                            <li><a href="shop.html">3 columns<span class="label-text sale">sale</span></a></li>
                            <li><a href="columns-4.html">4 columns</a></li>
                            <li><a href="columns-5.html">5 columns</a></li>
                            <li><a href="columns-6.html">6 columns</a></li>
                        </ul>
                        <ul>
                            <li><a href="#" class="title">Shop Styles</a></li>
                            <li><a href="catalog-mode.html">Catalog Mode<span class="label-text hot">hot</span></a></li>
                            <li><a href="product-hover-1.html">Product Hover 1<span class="label-text new">new</span></a></li>
                            <li><a href="catalog-mode.html">Product Hover 2 light</a></li>
                            <li><a href="product-hover-2-dark.html">Product Hover 2 Dark</a></li>
                            <li><a href="product-hover-3-light.html">Product Hover 3 Light</a></li>
                            <li><a href="product-hover-3-dark.html">Product Hover 3 Dark</a></li>
                            <li><a href="product-hover-4-light.html">Product Hover 4 Light</a></li>
                            <li><a href="product-hover-4-dark.html">Product Hover 4 Dark</a></li>
                        </ul>
                        <ul>
                            <li><a href="#" class="title">Product Page Layouts</a></li>
                            <li><a href="infinite-scroll.html">Infinite Scroll<span class="label-text new">new</span></a></li>
                            <li><a href="default-tabs.html">Default tabs design</a></li>
                            <li><a href="left-side-tabs.html">Left side tabs</a></li>
                            <li><a href="accordion-style-tabs.html">Accordion style tabs</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="track-order.html">Track order</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                        <div class="images">
                            <div class="col">
                                <a href="#"><img src="https://picsum.photos/400/215" alt="menu-banner"></a>
                            </div>
                            <div class="col">
                                <a href="#"><img src="https://picsum.photos/400/215" alt="menu-banner"></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-parent-item">
                    <a href="blog.html">Blog</a>
                    <div class="item-dropdown">
                        <ul>
                            <li class="nav-sublist">
                                <a href="#">Default Layout</a>
                                <ul class="menu-item-children">
                                    <li><a href="blog.html">Right Sidebar</a></li>
                                    <li><a href="blog-left.html">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="chess-blog.html">Chess Layout<span class="label-text hot">hot</span></a></li>
                            <li class="nav-sublist">
                                <a href="#">Grid Layout</a>
                                <ul class="menu-item-children">
                                    <li><a href="blog-grid-2.html">2 Columns Grid</a></li>
                                    <li><a href="blog-grid.html">3 Columns Grid</a></li>
                                    <li><a href="blog-grid-4.html">4 Columns Grid</a></li>
                                    <li><a href="blog-full-width.html">FullWidth Grid</a></li>
                                </ul>
                            </li>
                            <li><a href="centered-blog.html">Centered Layout</a></li>
                            <li><a href="blog-list.html">List Layout</a></li>
                            <li  class="nav-sublist">
                                <a href="single-blog.html">Single post</a>
                                <ul class="menu-item-children">
                                    <li><a href="blog-default.html">Post Default</a></li>
                                    <li><a href="single-full-width.html">Full width image</a></li>
                                    <li><a href="large-image.html">Large Image</a></li>
                                    <li><a href="blog-without-sidebar.html">Without sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-timeline.html">Timeline Layout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-parent-item">
                    <a href="portfolio.html">Portfolio</a>
                    <div class="nav-sublist-dropdown columns-5">
                        <ul>
                            <li class="banner"><img src="https://picsum.photos/270/240" alt="menu-banner6"></li>
                        </ul>
                        <ul>
                            <li><a href="#" class="title">Design Variants</a></li>
                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                            <li><a href="portfolio-classic.html">Portfolio Classic</a></li>
                            <li><a href="portfolio.html">Portfolio With Titles</a></li>
                            <li><a href="portfolio-full-width.html">Full width with titles</a></li>
                        </ul>
                        <ul>
                            <li><a href="#" class="title">Columns</a></li>
                            <li><a href="portfolio-column-2.html">2 Columns Layout</a></li>
                            <li><a href="portfolio-column-3.html">3 Columns Layout</a></li>
                            <li><a href="portfolio-column-4.html">4 Columns Layout</a></li>
                            <li><a href="portfolio-column-5.html">5 Columns Layout</a></li>
                            <li><a href="portfolio-column-6.html">6 Columns Layout</a></li>
                        </ul>
                        <ul class="project">
                            <li><a href="#" class="title">Portfolio project</a></li>
                            <li class="portfolio">
                                <img src="http://placehold.it/34x34" alt="img">
                                <a href="#">Consectetur aliquet</a>
                                <span>February 17, 2016</span>
                            </li>
                            <li class="portfolio">
                                <img src="http://placehold.it/34x34" alt="img2">
                                <a href="#">Consectetur aliquet</a>
                                <span>February 17, 2016</span>
                            </li>
                            <li class="portfolio">
                                <img src="http://placehold.it/34x34" alt="img3">
                                <a href="#">Consectetur aliquet</a>
                                <span>February 17, 2016</span>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-parent-item">
                    <a href="blog.html">Pages featires</a>
                    <div class="item-dropdown">
                        <ul>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="headers.html">Headers</a></li>
                            <li><a href="lookbook.html">Lookbook</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="team-members.html">Team Members</a></li>
                            <li><a href="single-members.html">Single Members</a></li>
                            <li><a href="instagram-wall.html">Instagram Wall</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Purchase</a></li>
            </menu>
        </div><!--menu-->
        <div class="navbar-right">
            <div class="inside">
                <div class="header-search">
                    <a href="#" class="search-btn"><i class="fa fa-search"></i></a>
                    <form>
                        <input type="text" value="" placeholder="Type here..." autocomplete="off" name="s">
                    </form>
                    <i class="close-search">x</i>
                </div><!--header-search-->
                <div class="wishlist">
                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </div><!--wishlist-->
                <div class="shopping-cart">
                    <a href="#">
								<span class="cart-bag">
									<i class="bag"></i>
								</span>
                        <span class="total">$899.98</span>
                    </a>
                    <div class="cart-popup-container">
                        <p>Recently added item(s)</p>
                        <ul>
                            <li>
                                <a href="#" class="pull-left"><img src="http://placehold.it/60x80" alt="cart-img"></a>
                                <h4><a href="#">light man modern elegant suit</a></h4>
                                <span class="price">1 x $499,99</span>
                                <a href="#" class="remove">x</a>
                            </li>
                            <li>
                                <a href="#" class="pull-left"><img src="http://placehold.it/60x80" alt="cart-img"></a>
                                <h4><a href="#">light man modern elegant suit</a></h4>
                                <span class="price">1 x $499,99</span>
                                <a href="#" class="remove">x</a>
                            </li>
                        </ul>
                        <div class="cart-subtotal">
                            <span>cart sub-total: <span class="price">$899,98</span></span>
                        </div><!--cart-subtotal-->
                        <div class="buttons">
                            <a href="#" class="btn">checkout</a>
                            <a href="#" class="btn view-cart">view cart</a>
                        </div><!--buttons-->
                    </div><!--cart-popup-container-->
                </div><!--shopping-cart-->
                <button class="btn-hamburger js-slideout-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div><!--navbar-right-->
    </div>
</div>
