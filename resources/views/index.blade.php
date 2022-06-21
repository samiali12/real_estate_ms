
@extends('layouts.main');
@section('main-container');

    <section class="hero-section container row">
        <div class="hero-details">
            <h1>Find your next
                Home in Las Vegas</h1>
            <p>Through our proprietary platform, WpResidence is changing how agents and clients navigate the process of finding or selling a home.</p>
        </div>
        <div class="hero-image">
            <img src="{{url('frontend/img/banner/banner_1.png')}}">
        </div>
    </section>


    <!-- about section is started from here -->
    <section class="about-us">
        <div class="main">
            <img src="/img/team2.jpeg" alt="team image">
            <div class="about-details">
                <h5>who we are</h5>
                <h1>We help clients buy and sell houses since 1989</h1>
                <p>With over $2 Billion in sales, due to our unparalleled results, expertise and dedication, we rank amongst the top 6 agencies in Las Vegas. Our agency is the industry’s top luxury producer.</p>
                <a href="#" class="btn-lm">Learn more</a>
            </div>
        </div>
    </section>



    <!-- properties listing section -->
    <section class="container">
        <div class="properties-listing-section">
            <div class="heading">
                <h6>RECENT PROPERTIES</h6>
                <h1>Explore the latest
                    properties available</h1>
            </div>
        <section class="product-container">

            <div class="card">
                <div class="imgbox">
                    <img src="/img/properties images/1.jpg" alt="properties">
                    
                </div>
                <div class="content">
                    <div class="property-name">
                        <h3>Villa with amazing view</h3>
                    </div>
                    <div class="property-price">
                        <h2>5.500.000 $</h2>
                    </div>

                    <div class="property_description">
                        <p>
                            Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage. Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light.
                        </p>
                    </div>
                    <div class="property_listing_details">
                        <span class="inforoom">
                            <i class="fa-solid fa-bed-empty"></i>
                            5
                        </span>
                        <span class="infobath">
                            <i class="fa-solid fa-bath"></i>
                            2
                        </span>
                        <span class="infoarea">
                            <i class="fa-solid fa-objects-column"></i>
                            <span>ft<sup>2</sup></span>
                        </span>
                    </div>
                    <div class="property_listing_location">
                        <div class="property_agent_details">
                            <div class="image">
                                <img src="/img/profile.jpg" alt="profile">
                            </div>
                            <div class="profile-name">
                                Elena pernia
                            </div>
                        </div>
                        <div class="listing_action">
                            <ul>
                                <li><i class="fa-thin fa-heart"></i></li>
                                <li><i class="fa-thin fa-share-nodes"></i></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="/img/properties images/1.jpg" alt="properties">
                    
                </div>
                <div class="content">
                    <div class="property-name">
                        <h3>Villa with amazing view</h3>
                    </div>
                    <div class="property-price">
                        <h2>5.500.000 $</h2>
                    </div>

                    <div class="property_description">
                        <p>
                            Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage. Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light.
                        </p>
                    </div>
                    <div class="property_listing_details">
                        <span class="inforoom">
                            <i class="fa-solid fa-bed-empty"></i>
                            5
                        </span>
                        <span class="infobath">
                            <i class="fa-solid fa-bath"></i>
                            2
                        </span>
                        <span class="infoarea">
                            <i class="fa-solid fa-objects-column"></i>
                            <span>ft<sup>2</sup></span>
                        </span>
                    </div>
                    <div class="property_listing_location">
                        <div class="property_agent_details">
                            <div class="image">
                                <img src="/img/profile.jpg" alt="profile">
                            </div>
                            <div class="profile-name">
                                Elena pernia
                            </div>
                        </div>
                        <div class="listing_action">
                            <ul>
                                <li><i class="fa-thin fa-heart"></i></li>
                                <li><i class="fa-thin fa-share-nodes"></i></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="/img/properties images/1.jpg" alt="properties">
                    
                </div>
                <div class="content">
                    <div class="property-name">
                        <h3>Villa with amazing view</h3>
                    </div>
                    <div class="property-price">
                        <h2>5.500.000 $</h2>
                    </div>

                    <div class="property_description">
                        <p>
                            Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage. Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light.
                        </p>
                    </div>
                    <div class="property_listing_details">
                        <span class="inforoom">
                            <i class="fa-solid fa-bed-empty"></i>
                            5
                        </span>
                        <span class="infobath">
                            <i class="fa-solid fa-bath"></i>
                            2
                        </span>
                        <span class="infoarea">
                            <i class="fa-solid fa-objects-column"></i>
                            <span>ft<sup>2</sup></span>
                        </span>
                    </div>
                    <div class="property_listing_location">
                        <div class="property_agent_details">
                            <div class="image">
                                <img src="/img/profile.jpg" alt="profile">
                            </div>
                            <div class="profile-name">
                                Elena pernia
                            </div>
                        </div>
                        <div class="listing_action">
                            <ul>
                                <li><i class="fa-thin fa-heart"></i></li>
                                <li><i class="fa-thin fa-share-nodes"></i></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="/img/properties images/1.jpg" alt="properties">
                    
                </div>
                <div class="content">
                    <div class="property-name">
                        <h3>Villa with amazing view</h3>
                    </div>
                    <div class="property-price">
                        <h2>5.500.000 $</h2>
                    </div>

                    <div class="property_description">
                        <p>
                            Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage. Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light.
                        </p>
                    </div>
                    <div class="property_listing_details">
                        <span class="inforoom">
                            <i class="fa-solid fa-bed-empty"></i>
                            5
                        </span>
                        <span class="infobath">
                            <i class="fa-solid fa-bath"></i>
                            2
                        </span>
                        <span class="infoarea">
                            <i class="fa-solid fa-objects-column"></i>
                            <span>ft<sup>2</sup></span>
                        </span>
                    </div>
                    <div class="property_listing_location">
                        <div class="property_agent_details">
                            <div class="image">
                                <img src="/img/profile.jpg" alt="profile">
                            </div>
                            <div class="profile-name">
                                Elena pernia
                            </div>
                        </div>
                        <div class="listing_action">
                            <ul>
                                <li><i class="fa-thin fa-heart"></i></li>
                                <li><i class="fa-thin fa-share-nodes"></i></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="/img/properties images/1.jpg" alt="properties">
                    
                </div>
                <div class="content">
                    <div class="property-name">
                        <h3>Villa with amazing view</h3>
                    </div>
                    <div class="property-price">
                        <h2>5.500.000 $</h2>
                    </div>

                    <div class="property_description">
                        <p>
                            Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage. Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light.
                        </p>
                    </div>
                    <div class="property_listing_details">
                        <span class="inforoom">
                            <i class="fa-solid fa-bed-empty"></i>
                            5
                        </span>
                        <span class="infobath">
                            <i class="fa-solid fa-bath"></i>
                            2
                        </span>
                        <span class="infoarea">
                            <i class="fa-solid fa-objects-column"></i>
                            <span>ft<sup>2</sup></span>
                        </span>
                    </div>
                    <div class="property_listing_location">
                        <div class="property_agent_details">
                            <div class="image">
                                <img src="/img/profile.jpg" alt="profile">
                            </div>
                            <div class="profile-name">
                                Elena pernia
                            </div>
                        </div>
                        <div class="listing_action">
                            <ul>
                                <li><i class="fa-thin fa-heart"></i></li>
                                <li><i class="fa-thin fa-share-nodes"></i></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="/img/properties images/1.jpg" alt="properties">
                    
                </div>
                <div class="content">
                    <div class="property-name">
                        <h3>Villa with amazing view</h3>
                    </div>
                    <div class="property-price">
                        <h2>5.500.000 $</h2>
                    </div>

                    <div class="property_description">
                        <p>
                            Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage. Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light.
                        </p>
                    </div>
                    <div class="property_listing_details">
                        <span class="inforoom">
                            <i class="fa-solid fa-bed-empty"></i>
                            5
                        </span>
                        <span class="infobath">
                            <i class="fa-solid fa-bath"></i>
                            2
                        </span>
                        <span class="infoarea">
                            <i class="fa-solid fa-objects-column"></i>
                            <span>ft<sup>2</sup></span>
                        </span>
                    </div>
                    <div class="property_listing_location">
                        <div class="property_agent_details">
                            <div class="image">
                                <img src="/img/profile.jpg" alt="profile">
                            </div>
                            <div class="profile-name">
                                Elena pernia
                            </div>
                        </div>
                        <div class="listing_action">
                            <ul>
                                <li><i class="fa-thin fa-heart"></i></li>
                                <li><i class="fa-thin fa-share-nodes"></i></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="load_more_listing_button">
            <button type="button">Load More Listing</button>
        </div>
    </section>


   @endsection('main-container');
    


    <script type="javascript" src="{{url('frontend/js/main.js')}}"></script>
    <script src="https://kit.fontawesome.com/637deafa29.js" crossorigin="anonymous"></script>
</body>
</html>
