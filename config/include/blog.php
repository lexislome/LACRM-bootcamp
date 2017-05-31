<?php
$PostId=$_REQUEST['PostId'];
$Post=getPost($PostId);

echo "<title>$Post[title]</title>" . "<h1>$Post[h1]</h1>" .  "<body>$Post[body]</body>" . "<ul>$Post[blogPosts]</ul>" ;

    function getPost($PostId){
        $Post=array(
            0=>array(
                'PostId'=>0,
                'title'=>"About Me",
                'h1'=>"About Me",
                'body'=>"<div>
                    <p>I'm 20 years old. I'm from Chicago, but I'm currently living in St. Louis while I
                        go to school and work.</p>

                    <h2>School</h2>

                    <p>I'm currently a rising junior at Washington University in St. Louis. I'm majoring
                        in psychology and linguistics with the intention of pursuing a graduate degree in
                        linguistics. I'm a Merle Kling Honors Fellow working on an independent research project
                        looking at the influence of historical origins of idioms on their decomposability.</p>

                    <h3>Classes I'm taking next semester:</h3>
                        <ul>
                            <li>Merle Kling Undergraduate Fellows Seminar</li>
                            <li>Morphology</li>
                            <li>Phonological Analysis</li>
                            <li>Developmental Psychology</li>
                            <li>French: Narrative Voices</li>
                        </ul>

                    <h2>Work</h2>

                    <p>I'm working this summer on a coding bootcamp fellowship at Less Annoying CRM, a tech
                    company located in downtown St. Louis. The goal of the fellowship is to learn coding
                    skills that will help us produce a final website or web app. This blog is my first
                    coding project.

                    <h2>Interests</h2>
                        <ul>
                            <li>running</li>
                            <li>reading</li>
                            <li>crafting</li>
                            <li>cooking and baking</li>
                            <li>exploring and travel</li>
                            </ul>
                    ",


                'blogPosts'=>
                        "This is supposed to appear under the h2 Blog Posts below"

                ),


            1=>array(
                'PostId'=>1,
                'title'=>"Running",
                'h1'=>"Running",
                'body'=>"<div>
                    <h2>Distances I've raced:</h2>
                        <ul>
                                <li>3 mile</li>
                                <li>5k</li>
                                <li>10k</li>
                                <li>Half-marathon</li>
                                <li>Marathon</li>
                            </ul>


                        <h2>Places I like to run:</h2>
                            <ul>
                                <li>Forest Park (St. Louis)</li>
                                <li>Prairie Path (Batavia, IL)</li>
                                <li>Lakefront Path (downtown Chicago)</li>
                            </ul>
                            ",
                'blogPosts'=>"
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>"
            ),

            2=>array(
                'PostId'=>2,
                'title'=>"Reading",
                'h1'=>"Reading",
                'body'=>"<div>
                    <h2>Some of my favorite books:</h2>
                        <ul>
                            <li>Pride and Prejudice<span> by Jane Austen</span></li>
                            <li>Harry Potter<span> by JK Rowling</span></li>
                            <li>All the Light We Cannot See<span> by Anthony Doerr</span></li>
                            <li>Shatter Me<span> by Tahereh Mafi</span></li>
                        </ul>
                        ",

                'blogPosts'=>"
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>"

                        ),
            3=>array(
                'PostId'=>3,
                'title'=>"Crafting",
                'h1'=>"Crafting",
                'body'=>"<div>
                    <h2>Current Projects:</h2>
                        <ul>
                            <li>knitted afghan</li>
                            <li>knitted alpaca wool socks</li>
                            <li>upholstered headboard and desk chair for my apartment</li>
                            <li>T-shirt quilt</li>
                        </ul>

                    <h2>Upcoming Projects:</h2>
                        <ul>
                            <li><a href='http:www.maggiesrags.com/dishcloth.pdf'>dischloths for my new apartment</a></li>
                            <li>mason jar soap dispensers</li>
                            <li><a href='http:www.twotwentyone.net/fabric-covered-books/'>fabric-covered books</a></li>

                    ",

                'blogPosts'=>"
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>"
                        ),

                4=>array(
                    'PostId'=>4,
                    'title'=>"Cooking and Baking",
                    'h1'=>"Cooking and Baking",
                    'body'=>"<div>
                <h2>Which is better?</h2>
                    <p>Most of the time I hear people describe themselves as someone who likes to cook OR someone who likes to bake, not both. Baking is strict, requiring precise measurements and few deviations from the recipe.
                         It's essentially a perfectionist's game. Cooking is more freeform. You can do whatever you want to, so long as it tastes good. Usually these differences cause people to choose one camp over the other,
                         but I like to straddle the border. I prefer the flexibility of cooking over the rigid confines of baking. However, the outcome of baking is more satisfying to me. I love how decorative you can be, and I
                         love the aesthetic of baking. Besides, there's nothing like pulling a sweet treat out of the oven.</p>
                <h2>Cooking</h2>
                <h3>Favorite dishes to cook:</h3>
                    <ul>
                        <li><a href='https://www.asaucykitchen.com/chickpea-roasted-butternut-squash-salad/'>fun, colorful salads</a></li>
                        <li><a href='http://littlespicejar.com/sesame-ginger-tofu-and-veggie-stir-fry/'>ginger stir fry</a></li>
                        <li><a href='http://damndelicious.net/2014/06/25/pineapple-fried-rice/'>pineapple fried rice</a></li>
                        <li><a href='http://www.foodiecrush.com/spinach-and-mushroom-egg-white-frittata/'>frittatas</a></li>
                        <li><a href='http://therecipecritic.com/2013/08/cinnamon-roll-pancakes/'>cinnamon swirl pancakes</a></li>
                        <li><a href='http://www.nomingthrulife.com/mean-green-pesto-pasta/'>garlic pesto pasta</a></li>
                        <li><a href='http://sallysbakingaddiction.com/2014/01/22/roasted-vegetable-whole-wheat-pizza/'>pizza (from scratch of course!)</a></li>
                        <li><a href='http://www.prevention.com/food/cook/healthy-eggplant-parmesan-recipe'>eggplant parmesean</a></li>
                    </ul>

                    <br>

                <h2>Baking</h2>
                <h3>Favorite treats to bake:</h3>
                    <ul>
                        <li><a href='http://amyshealthybaking.com/blog/2017/03/12/whole-wheat-zucchini-banana-bread/'>banana zucchini bread</a></li>
                        <li><a href='http://www.cozycakescottage.com/2014/09/09/pumpkin-spice-buttermilk-cake-with-cinnamon-cream-cheese-frosting-with-video/'>pumpkin spice cake</a></li>
                        <li><a href='http://www.myrecipes.com/recipe/apple-streusel-muffins-maple?crlt_pid=camp.4h8VqlKQH6aRapple'>apple streusel muffins</a></li>
                        <li><a href='https://www.blessthismessplease.com/2016/12/soft-gingerbread-cut-out-cookies-2.html'>christmas cookies</a></li>
                        <li><a href='http://backforseconds.com/copycat-reeses-peanut-butter-cup-bars/'>homemade reeses bars</a></li>
                        <li><a href='http://www.bhg.com/blogs/delish-dish/2013/08/29/no-bake-chocolate-chip-cookie-dough-truffles/'>cookie dough truffles</a></li>
                        <li><a href='http://www.bakedbyrachel.com/snickerdoodle-blondie-bars/'>snickerdoodle blondie bars</a></li>
                        <li><a href='http://cookiesandcups.com/sea-salt-butterscotch-pretzel-cookies/'>salted caramel butterscotch pretzel cookies</a></li>
                        <li><a href='https://www.twopeasandtheirpod.com/two-ingredient-banana-peanut-butter-ice-cream/'>banana ice cream</a></li>
                    </ul>
                    ",

                'blogPosts'=>"
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>"
                ),

                5=>array(
                    'PostId'=>5,
                    'title'=>"Exploring",
                    'h1'=>"Exploring and Travel",
                    'body'=>"<div>
                                <p>some random travel stuff</p>
                            ",

                    'blogPosts'=>"gfadfg
                    "
                )

        );
        return $Post[$PostId];
    }

function getPostId($PostId){
}
    ?>
