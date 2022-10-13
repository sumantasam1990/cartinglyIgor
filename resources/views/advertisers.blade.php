<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartingly - Advertisers</title>
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
            <img src="{{asset('logo.webp')}}" style="width: 120px; float: right; margin-right: 20px;" class="img-fluid">
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
                    Advertise your products next to top Influencers, get affordable, super effective and precise ad placement for a flat weekly rate.
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
                        We're on a mission to enable followers of social media Influencers to be able to consume those Influencer's exclusive TOP recommendations in the easiest, fastest, detailed and organized way. Influencers can build Recommendation Carts of products, things, places, brands and people. Followers can then discover and follow these Carts, save a lot of time and receive a TON of detailed information about recommendations. With this model, we enable advertisers to be able to advertise their products and brand in the most effective way with the most precise placement of their ads.
                    </p>
                </div>
                <div class="col-md-6">
{{--                    <img style="height: 250px;" src="{{asset('/Untitled-6.webp')}}" class="img-fluid">--}}
                </div>
            </div>

            <div class="row" style="margin-top: 60px;">
                <div class="col-12">
                    <h2 class="fw-bold fs-1 text-danger text-center mt-4">
                        Incredible Benefits For Advertisers
                    </h2>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-7">
                    <h2 class="fs-1 fw-bold text-danger">
                        Free Trial. No Credit Card.
                    </h2>
                    <p>
                        We allow advertisers to try us out for a free trial, no credit card required. You will get the same exact benefits and access to placement that paid advertisers get.
                    </p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-7">
                    <h2 class="fs-1 fw-bold text-danger">
                        The Most Precise & The Most Effective Ad Placement On The Internet.
                    </h2>
                    <div id="comp-l860cgbz1" class="_2Hij5 _3bcaz" data-testid="richTextElement"><p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">Be the <span style="font-weight:bold;">exclusive advertiser</span>&nbsp;for a particular Influencer. For example let's say you only have one ad in the Influencer's Recommendation Cart or only on one Recommended Page, even with just that one single ad, no other advertiser will be allowed to add their ad ANYWHERE on that Influencer's Recommendation Carts or Page for the duration that you chose. You see the specific individual product and the Recommendation Cart that your ad will be placed right next to and in, before you pay and before the ad goes live. This is invaluable because you can then tailor the content in your ad to be much more relevant and precisely match the recommended product, the product attributes and the overall Recommendation Cart. </span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">By you being the exclusive advertiser for an Influencer, the <span style="font-weight:bold;">SAME EXACT GROUP</span> of followers of top influencers will see <span style="font-weight:bold;">ONLY YOUR ADS EVERY SINGLE DAY </span>over and over again placed next to brand new daily recommendation products from that Influencer. That will be incredibly effective in getting followers to click on your ads.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">Find the perfect matching Influencer. </span>We will <span style="font-weight:bold;">constantly be looking for the PERFECT Influencer for your brand and your products.</span> This way the followers of that Influencer are MUCH more likely to be your target customer and they'll be more likely to buy your products.&nbsp;</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">We allow up to <span style="font-weight:bold;">2,000 characters per ad (way more than other advertising platforms) </span>so that you can attract the attention of users much more effectively. Ads will also have </span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">full text formatting</span></span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"> with font sizes, colors, fonts and font weights. This enables advertisers to stylize the ad content that will better attract the attention of users.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">All ads will be placed ABOVE the recommended product on the Recommendation Page.</span> This means that people are guaranteed to see your ad when they open the Recommendation Page to see the recommended product.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">Advertisers can post <span style="font-weight:bold;">the same exact ad </span>on all of the Recommendation Pages from that same Influencer.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">Unlike other advertising platforms, on Cartingly, we charge Brands a weekly flat rate per influencer and they can add UNLIMITED number of ads to each one a particular Influencer's Recommendation Pages. </span>The metric that we use to determine the</span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">&nbsp;weekly advertising rate that an advertiser will pay is very simple. We charge 10</span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">&nbsp;cents for each open that all of an Influencer's Recommendation Carts had the previous 7 days. So if the total number of opens was 50,000, we would charge the advertiser a flat rate of $5,000 for the next 7 days and advertisers can have one ad on each of the Influencer's Recommendation Pages. And because Influencers are required to create at least one new Recommendation Cart per day, you can assume that each day, you will have at least several new Recommendation Pages to place one of your ads on.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">Our Influencer Partner Program gives Influencers 80% advertising revenue share from what advertisers on their Recommendation Pages pay Cartingly. </span>As long as they add at least 1,000 opens per week and at least one new Recommendation Cart per day, they will remain in the Partner Program. This is what will get a lot of popular Influencers to sign up very quickly and bring a lot of their followers on board. This meaning more eyeballs on your ads.&nbsp;</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-weight:bold;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">How much can an Influencer earn? </span></span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">Out of the 10 cents that Cartingly earns from each open of a Recommendation Page, the Influencer earn 8 cents. So for example, let's say an Influencer has 5,000 followers on Instagram. They are able to get 2,000 of them to sign up for Cartingly. Each Influencer must create at least one new Recommendation Cart per day. Let's assume each Cart has an average of 6 products. Out of the 2,000 followers, an average of 1,000 per day open the new Recommendation Cart. Each one of those 1,000 opens each of the 6 Recommendation Pages (products). That is 6,000 opens per day just based off of 1,000 followers being engaging daily. <span style="font-weight:bold;">That means the Influencer is earning PER DAY, $480.</span> Again this example is just based on 1,000 daily <span style="font-weight:bold;">engaged </span>followers.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">Leaderboards </span>show the most popular Recommendation Carts on our Discover Page in order based on which Carts have the most opens. Which is a very easy way for Influencers to build a larger following and your advertisers to get more eyeballs on their ads.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="color:rgb(0, 0, 0); font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="font-weight:bold;">Influencers MUST post at least one Recommendation Cart per day in order to continue being a part of the Partner Program.</span> For advertisers, this means that people will have a brand new Recommendation Cart that they will want to look at each day and that gives you a daily opportunity to have a new ad and have the same group of people see your ad on a daily basis.</span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span class="wixGuard">​</span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">We allow advertisers to see the <span style="font-weight:bold;">prices </span>of the recommended prices so you can choose the most price and quality comparable recommended product to place your product right next to or choose a recommended product that is a little more expensive than yours so yours can be more attractive. </span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;">&nbsp;</p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">We allow advertisers to choose from three purposes for their ad as it relates to the recommended product. Their product serves as a fantastic pairing for the recommended product, their product serves as another highly relevant choice for that recommended product and finally their content serves as a highly informative piece of content about the recommended product. Advertisers can choose a headline for the ad that will tell people the benefit of the product or content in the ad, as it relates to the recommended product. With this, the ad isn't seen as an ad but more so a valuable asset (a product pairing, another choice for that product or a highly informative piece of content).&nbsp;</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">We also allow the advertisers to see why the influencer recommended each product and to tie that into the content in their ad so their ad is even more relevant to the recommended product.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;">&nbsp;</p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">This will dramatically increase the chances of people clicking on your ad. Because these products will be recommendations from influencers that people trust and need in order to complete a recipe, for example, they will much more pay attention to your ad if the content in your ad is incredibly relevant to that particular recommended product.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;">&nbsp;</p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">Your ad will be placed right next to a highly relevant item on the Recommendation Page. That is the page where an Influencer has added a specific item(s) as their recommendation. Your ad will have a red border around it so that it catches the attention of people more. For example, if the recommended item by an influencer is cinnamon spice for a recipe and your product is also cinnamon spice, then we will place your ad above the recommended cinnamon spice on that Recommendation Page. They will need cinnamon spice to complete the recipe so if they don't like the recommended cinnamon spice, they may very well like yours since there will only be two choices for cinnamon spice on the Recommendation Page.</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">Using this same example of cinnamon spice, even if you don</span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">'t sell cinnamon spice, maybe add a recipe to your website that also uses cinnamon spice or other content (blog post or video) that talks about cinnamon spice. So your ad is precisely relevant to the required ingredient and you get the user to your site where they can then follow you on social media or buy your products.</span></span></p></div>

                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-7">
                    <h2 class="fs-1 fw-bold text-danger">
                        You Get To Be The Exclusive Advertiser
                    </h2>
                    <div id="comp-l860cgca1" class="_2Hij5 _3bcaz" data-testid="richTextElement"><p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">We are also </span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">the only platform on the internet</span></span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"> that</span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">&nbsp;allows Brands exclusivity to particular influencers or content. We allow advertisers to choose to become the exclusive advertisers for a period of time of their choice of Recommendation Pages, Recommendation Carts or Influencers themselves. If you choose to become the exclusive advertiser for an Influencer, this means that only your ads will be added to any of their Recommendation Carts and Recommendation Pages. Even if you don't choose to add your advertisement to one of their Recommendation Cart or Recommendation Page, no other advertiser will be allowed to add their advertisement for the period of time that you have chosen.&nbsp;</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">The exclusivity is automatic and <span style="font-weight:bold;">complimentary </span>once you add your advertisement to a Recommendation Page or Recommendation Cart.&nbsp;</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;">&nbsp;</p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">This is highly valuable because if it's an Influencer with tens of thousands of followers of social media and they bring most of them to Cartingly, those followers will only see your ads on that Influencer's Recommendation Pages and Carts. The more time they only see your ads, the higher the chances that they will click on the ad.&nbsp;</span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></p>

                        <p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">If you choose to be the exclusive advertiser for a particular Recommendation Cart(s) then only your ads will be added to those cart(s) for the period of time that you have chosen. The same goes for Recommendation Pages.</span></span></p></div>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-7">
                    <h2 class="fs-1 fw-bold text-danger">
                        Flat Weekly Rate
                    </h2>
                    <div id="comp-l860cgc3" class="_2Hij5 _3bcaz" data-testid="richTextElement"><p class="font_7" style="line-height:1.4em; font-size:16px;"><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;"><span style="font-weight:bold;">Unlike other advertising platforms, on Cartingly, we charge Brands a weekly flat rate per influencer rather than an advertising campaign based on impressions and clicks. </span></span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">Our fee metric is between $1 and $5 per follower that you have. So let's say that an influencer has</span></span><span style="font-family:arial,ｍｓ ｐゴシック,ms pgothic,돋움,dotum,helvetica,sans-serif;"><span style="color:#000000;">&nbsp;500 followers, a Brand will simply between $500 and $2,500 per week and be able to add highly relevant ads to each of that influencer's Recommendation Pages. The bigger the brand is, the higher they're charged. And for influencers, it's super simply to increase the amount that you earn, the more followers they have the more that they earn.</span></span></p></div>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-7">
                    <h2 class="fs-1 fw-bold text-danger">
                        Permanent Low Ad Cost
                    </h2>
                    <p>
                        If you join as an advertiser within 7 days after we email you initially, then after your free trial, you will get permanently locked into a much lower monthly flat rate. What ever the flat rate that we charge you for the first month, will be the permanent flat rate that you are charged for as long as you continue to be an advertiser.
                    </p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-7">
                    <h2 class="fs-1 fw-bold text-danger">
                        Top Influencer Recommendations
                    </h2>
                    <p>
                        The great benefit to advertisers is that these are top recommendations from people's favorite influencers whose recommendations they trust. Meaning that they will pay more attention to the Recommendation Carts, Recommendation Pages and items within the carts and in turn pay more attention to the Promoted Items (your advertised products).
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
                <img src="{{asset('logo.webp')}}" style="width: 120px; " class="img-fluid">
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold">Cartingly</h4>
                <p><a href="/">Influencers</a> </p>
                <p><a href="advertisers">Advertisers</a> </p>
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
