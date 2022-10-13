<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartingly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
            border-radius: 2px;
            color: #000000;
            font-weight: 600;
            font-size: 14px;
        }
        * {
            border-radius: 2px !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('logo.webp')}}" style="width: 120px; float: right; margin-right: 20px;" class="img-fluid" alt="cartingly">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><hr class="dropdown-divider"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled">Disabled</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

        </div>
    </div>
</nav>

<div class="container-fluid hero" style="background: #F9F20E; padding: 10px; display: flex; flex-direction: row; align-items: center; justify-content: center; min-height: 600px; text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="fs-1 fw-bold text-danger">
                    Share your TOP exclusive  recommendations of products, things, people brands & places with your followers
                </h1>
                <p class="fw-bold">
                    Submit your email below if you're interested and we will reach out to you shortly!
                </p>
                @if (\Session::has('msg'))
                    <div class="alert alert-primary">
                        {!! \Session::get('msg') !!}
                    </div>
                @endif
                <form class="mt-4 row row-cols-lg-auto g-3 align-items-center justify-content-center" action="/subscribe" method="post">
                    @csrf
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Your Email Address</label>
                        <div class="input-group">
                            <input style="background: transparent;
    border-bottom: 3px solid #000000;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    color: #000000;" type="email" name="email" required class="form-control" id="inlineFormInputGroupUsername" placeholder="Your Email Address">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-lg">I'm Interested</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding: 12px; margin-top: 60px;">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <div class="row">
                <div class="col-md-6">
                    <h2 class="fw-bold fs-1 text-danger">
                        What is Cartingly?
                    </h2>
                    <p>
                        We're on a mission to enable followers of Influencers to be able to consume those Influencer's exclusive TOP recommendations in the easiest, fastest, detailed and organized way. Influencers can build Recommendation Carts of products, things, places, brands and people. Followers can then discover and follow these Carts, save a lot of time and receive a TON of detailed information about recommendations.
                    </p>
                </div>
                <div class="col-md-6">
{{--                    <img style="height: 250px;" src="{{asset('/Untitled-6.webp')}}" class="img-fluid">--}}
                </div>
            </div>

            <div class="row" style="margin-top: 60px;">
                <div class="col-12">
                    <h2 class="fw-bold fs-1 text-danger text-center mt-4">
                        Incredible Benefits For Influencers
                    </h2>
                </div>
            </div>

            <div class="row" style="margin-top: 120px;">

                <div class="col-md-8">
                    <h2 class="fw-bold fs-1 text-danger">
                        Highly Lucrative Partner Program & Highly Effective Ad Model.
                    </h2>
                    <p class="fw-bold">
                        We do Revenue Sharing with Influencers. Our percentage split is 80% for the Influencers and we keep 20%. Our requirements are very minimal in order to participate in the Partner Program.
                    </p>
                    <p>
                        The reason why we have such a lucrative Partner Program is because we can charge advertisers much more than other platforms because of our highly precise ad placement. We are also the only platform on the internet that allows Brands exclusivity to particular influencers or Recommendation Pages. Brands can choose to be the exclusive advertiser of a particular Influencer (meaning any of their Recommendation Carts and Pages), particular Recommendation Cart(s) and Recommendation Page(s). For example let's say an advertiser only has one ad on an Influencer's Recommendation Cart or only on one Recommended Page, even with just that one single ad, no other advertiser will be allowed to add their ad ANYWHERE on that Influencer's Recommendation Carts or Page for the duration that you chose. Meaning that an Influencer's followers (the same groups of people) who will look at new Recommendation Pages, will see ads from the same brand over and over again which is great for advertisers.
                    </p>
                    <p>
                        Advertisers can post the same exact ad on all of the Recommendation Pages from that same Influencer.
                    </p>
                    <p>
                        With an individual brand being the exclusive advertiser for an Influencer, the SAME EXACT GROUP of followers of that Influencer will see ONLY ADS FROM THE SAME ADVERTISER EVERY SINGLE DAY over and over again placed next to brand new recommendations from that Influencer. That will be incredibly effective in getting followers to click on your ads.
                    </p>
                    <p>
                        Unlike other advertising platforms, on Cartingly, we charge Brands a weekly flat rate per influencer and they can add UNLIMITED number of ads to each one a particular Influencer's Recommendation Pages. The metric that we use to determine the weekly advertising rate that an advertiser will pay is very simple. We charge 10 cents for each open that all of an Influencer's Recommendation Carts had the previous 7 days. So if the total number of opens was 50,000, we would charge the advertiser a flat rate of $5,000 for the next 7 days and they can have one ad on each of the Influencer's Recommendation Pages.
                    </p>
                    <p>
                        Advertisers see the specific individual product and the Recommendation Cart that their ad will be placed right next to, before they pay and before the ad goes live. This is invaluable because the advertisers can then tailor the content in their ad to much better and precisely match the product, the product attributes and the Recommendation Cart. This will dramatically increase the chances of people clicking on their ad and thus we why can charge much more per ad.
                    </p>
                    <p>
                        We allow up to 2,000 characters per ad (way more than other advertising platforms) so that advertisers can attract the attention of users much more effectively. Ads will also have full text formatting with font sizes, colors, fonts and font weights. This enables advertisers to stylize the ad content that will better attract the attention of users.
                    </p>
                    <p>
                        How much can an Influencer earn? Out of the 10 cents that Cartingly earns from each open of a Recommendation Page, the Influencer earn 8 cents. So for example, let's say an Influencer has 5,000 followers on Instagram. They are able to get 2,000 of them to sign up for Cartingly. Each Influencer must create at least one new Recommendation Cart per day. Let's assume each Cart has an average of 6 products. Out of the 2,000 followers, an average of 1,000 per day open the new Recommendation Cart. Each one of those 1,000 opens each of the 6 Recommendation Pages (products). That is 6,000 opens per day just based off of 1,000 followers being engaging daily. That means the Influencer is earning PER DAY, $480. Again this example is just based on 1,000 daily engaged followers.
                    </p>
                    <p>
                        How and when do Influencers get paid? Influencers get paid on a weekly basis on the day that advertisers pay Cartingly. So advertisers will pay upfront for the next 7 days. We pay Influencers via direct deposit.
                    </p>
                    <p>
                        We allow advertisers to choose from three purposes for their ad as it relates to the recommended product. Their product serves as a fantastic pairing for the recommended product, their product serves as another highly relevant choice for that recommended product and finally their content serves as a highly informative piece of content about the recommended product. Advertisers can choose a headline for the ad that will tell people the benefit of the product or content in the ad, as it relates to your recommended product. With this, the ad isn't seen as an ad but more so a valuable asset (a product pairing, another choice for that product or a highly informative piece of content).
                    </p>
                    <p>
                        We also allow the advertisers to see why the influencer recommended each product and to tie that into the content in their ad so their ad is even more relevant to the recommended product.
                    </p>
                    <p>
                        For these reasons, we can charge brands MUCH higher ad rates than other platforms and thus our Influencers make much more money with our Partner Program.
                    </p>
                    <p>
                        After you're invited to join Cartingly as an Influencer, you will need to create your first Recommendation Cart within 7 days afterwards. Influencers will then simply need to maintain at least 1,000 new opens per week across all of the Recommendation Carts as well as post at least 1 new Recommendation Cart per day. The more Opens you have the higher the advertiser will pay for, the next week.
                    </p>
                    <p>
                        These advertisements will be displayed above your Recommended Product inside each Recommendation Page inside of your Recommendation Cart. People will clearly be able to tell that our ad is NOT one of your recommendations.
                    </p>
                </div>

                <div class="col-md-4">
{{--                    <img src="{{asset('/money.webp')}}" class="img-fluid" style="text-align: right; ">--}}
                </div>

{{--                <div class="col-md-5 mt-5">--}}
{{--                    <img src="{{asset('/phone.webp')}}" class="img-fluid" style="height: 320px; text-align: right;">--}}
{{--                </div>--}}

                <div class="col-md-7 mt-5" >
                    <h2 class="fw-bold fs-1 text-danger">
                        Super Detailed
                    </h2>
                    <p>
                        We're super detailed! Let's say for example your recommendation is for a recipe, people will see the a lot of information. They will see the recipe itself, why that recipe is good for the title of that Recommendation Cart, individually list ingredients, a URL to the exactly product page where they can buy that item, the retailer and the price of the ingredient. So they can simply shop online for the ingredients in a very organized and fast manner.

                    </p>
                    <p>
                        As people buy each item either in store or online, they can simply remove that item from the list. Everything is in one simple place.
                    </p>

                </div>




                <div class="col-md-7 mt-5" >
                    <h2 class="fw-bold fs-1 text-danger">
                        Super Organized
                    </h2>
                    <p>
                        We're super organized as well. With Cartingly, people will have 3 lists in their profile. Products & Things, Places and finally People and Brands. For the first two, they will be separated into two lists, Single Destination and Multi-Destination. There is a big beneficial reason for this.
                    </p>
                    <p>
                        For example, let's say the Recommendation Cart is for "Best Burgers In NYC". With this great organization, people will be able to see a list of the establishments that the Influencer has recommended but it will be organized by individual establishments and within each establishment you can see which burgers you should try, their price and why you should try it along with a link back to the Influencer's Cartingly profile and any other important details.
                    </p>
                    <p>
                        Every time that people Save a Cart, it will automatically be added to one of the 3 lists.
                    </p>
                </div>

                <div class="col-md-5 mt-5">
{{--                    <img src="{{asset('/yoga.webp')}}" class="img-fluid" style="height: 320px; text-align: right; float: right;">--}}
                </div>

{{--                <div class="col-md-4 mt-5">--}}
{{--                    <img src="{{asset('/talk.webp')}}" class="img-fluid" style=" text-align: right; ">--}}
{{--                </div>--}}
                <div class="col-md-8 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Much Better Follower Engagement
                    </h2>
                    <p>
                        Using Cartingly will lead to much better and in depth engagement from your followers. Because your followers can capture, remember and try many more of your recommendations than ever before thanks to our detailed, organized and automated saving functionality of recommendations. This will lead them to share more of your Recommendation Carts on social media allowing more of their friends to see them, enabling you to get more followers, have more Opens on Cartingly and ultimately leading to you generating more advertising revenue.
                    </p>

                </div>

                <div class="col-md-4 mt-5">
{{--                    <img src="{{asset('/groc.webp')}}" class="img-fluid" style="height: 380px; text-align: right; ">--}}
                </div>
                <div class="col-md-8 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Categories
                    </h2>
                    <p>
                        Within each cart, Influencers will create Categories to better organize options for each type of Category within a recommendation. For example, let's say the recommendation is for a home remodel.
                    </p>
                    <p>
                        A Category could be sofas. And then within sofas, you will easily be able to see all of the choices for sofas that the Influencer has recommended along with the exact product page URL or shop name of where it can be bought and the price.
                    </p>
                </div>

                <div class="col-md-7 mt-5" >
                    <h2 class="fw-bold fs-1 text-danger">
                        Follow Carts
                    </h2>
                    <p>
                        Our Follow Cart feature allows you to simply follow a cart and each time the Influencer adds something to the cart, that item will be automatically added to one of the proper 3 lists and the important information will be properly organized. This way you can always be sure that you will always be organized and updated with the new recommendations from your favorite Influencers.
                    </p>

                </div>

                <div class="col-md-5 mt-5">
{{--                    <img src="{{asset('/cart.webp')}}" class="img-fluid" style="height: 320px; text-align: right; float: right;">--}}
                </div>

{{--                <div class="col-md-4 mt-5">--}}
{{--                    <img src="{{asset('/rest.webp')}}" class="img-fluid" style="text-align: right; ">--}}
{{--                </div>--}}
                <div class="col-md-8 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Relax & Follow Influencers
                    </h2>
                    <p>
                        People can sit back, relax, save time, stay very organized and detailed with new Recommendation Carts from each Influencer that they follow. Each time that an Influencer creates a Cart Recommendation, that cart and all of the products or people within that Cart, will be automatically added to one of the proper 3 lists. This enables people to not have to go back to the Influencer's profile to check for new recommendations and always stay organized, detailed and up to date.
                    </p>

                </div>

            </div>

            <div class="row mt-5">

{{--                <div class="col-md-4 mt-5">--}}
{{--                    <img src="{{asset('/lead.webp')}}" class="img-fluid" style="height: 240px; text-align: right; ">--}}
{{--                </div>--}}

                <div class="col-md-8 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Leaderboards
                    </h2>
                    <p>
                        We will have 3 leaderboards (Places, People/Brands and Products/Things). Carts will be displayed in order of total Opens. This way, Influencers increase the chances of getting noticed more and capturing more followers much more easily than other social media platforms. Leaderboards are the sole way that people can discover new Recommendation Carts and Influencers to follow.
                    </p>

                </div>




                <div class="col-md-8 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Easily Checkoff
                    </h2>
                    <p>
                        People can easily checkoff each item that they have bought so that they can easily stay up to date on the recommended items and brands they still need to try and people they still need to follow.
                    </p>

                </div>

                <div class="col-md-4 mt-5">
{{--                    <img src="{{asset('/tick.webp')}}" class="img-fluid" style="height: 240px; text-align: right; ">--}}
                </div>

                <div class="col-md-8 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Vote On Recommendations
                    </h2>
                    <p>
                        Influencers can allow their followers to ask them for recommendations and then fellow followers can vote on those recommendations. This way Influencers can provide recommendations to their followers that they want the most.
                    </p>

                </div>

                <div class="col-md-4 mt-5">
{{--                    <img src="{{asset('/reco.webp')}}" class="img-fluid" style="height: 240px; text-align: right; ">--}}
                </div>




                <div class="col-md-6 mt-5">
                    <h2 class="fw-bold fs-1 text-danger">
                        Easily Access Cart Details
                    </h2>
                    <p>
                        At anytime easily go back to the cart to access the Influencer's profile, the description of the cart along with any other important details.
                    </p>
                </div>

            </div>

        </div>



    </div>








</div>



<div class="contsiner-fluid" style="padding: 30px; background: #F9F20E;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('logo.webp')}}" style="width: 120px;" class="img-fluid mb-4" alt="cartingly">
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold">Cartingly</h4>
                <p><a href="/">Influencers</a> </p>
                <p><a href="/advertisers">Advertisers</a> </p>
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold">Let's Connect</h4>
                <p><a href="mailto:advertisers@cartingly.com">Email Us</a> </p>
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold">Legal Stuff</h4>
                <p><a href="/terms">Terms</a> </p>
                <p><a href="/privacy">Privacy</a> </p>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
