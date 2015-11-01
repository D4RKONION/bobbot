<?php

//set up the Bot API token
$botToken = "152790712:AAERn4iMA_rcX-Svgh5H4Xt_q1me3Hw8JJI";
$website = "https://api.telegram.org/bot".$botToken;

//Grab the info from the webhook, parse it and put it into $message
$content = file_get_contents("php://input");
$update = json_decode($content, TRUE);
$message = $update["message"];

//Make some helpful variables
$chatId = $message["chat"]["id"];
$text = $message["text"];

//Our BobWisdom Array
$bobWisdom = ["That's a crooked tree. We'll send him to Washington.", "I like to beat the brush.", "In painting, you have unlimited power. You have the ability to move mountains. You can bend rivers. But when I get home, the only thing I have power over is the garbage.", "You need the dark in order to show the light.", "Look around. Look at what we have. Beauty is everywhere—you only have to look to see it.", "Just go out and talk to a tree. Make friends with it.", "There's nothing wrong with having a tree as a friend.", "Trees cover up a multitude of sins.", "They say everything looks better with odd numbers of things. But sometimes I put even numbers—just to upset the critics.", "How do you make a round circle with a square knife? That’s your challenge for the day.", "I remember when my Dad told me as a kid, ‘If you want to catch a rabbit, stand behind a tree and make a noise like a carrot. Then when the rabbit comes by you grab him.’", "We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted", "The secret to doing anything is believing that you can do it. Anything that you believe you can do strong enough, you can do. Anything. As long as you believe", "Water's like me. It's laaazy ... Boy, it always looks for the easiest way to do things", "I really believe that if you practice enough you could paint the 'Mona Lisa' with a two-inch brush.", "If I paint something, I don't want to have to explain what it is", "We don't make mistakes. We just have happy accidents.", "The stream can go whatever way you want, it's your little stream", "Happy Little Cloud", "Happy Little Trees", "Sneaky little cloud! Running around here at night", "Brown snow is worse than yellow snow", "and maybe there's a little cloud over here, just a little floater.", "Sometimes you have to scare em out, scare those little rascals out", "The little trees are just there, hiding in your brush and you have to find them", "I don't want you to be unhappy", "Everything in nature is pretty... use it!", "All you need is a dream in your heart", "That'll be our little secret.", "Gotta give him a friend. Like I always say 'everyone needs a friend'.", "We don't know where it goes. We don't really care.", "Any time ya learn, ya gain.", "Be sure to use odorless paint-thinner. If it's not odorless, you'll find yourself working alone very, very quick.", "Clouds are very, very free.", "Tender as a mothers love... And with my mother, that was certainly true.", "Just scrape in a few indications of sticks and twigs and other little things in there. People will think you spend hours doing this.", "Maybe in our world there lives a happy little tree over there.", "Oh, that would make a nice place to fish. I like fishing, but I'm not a very good fisherman. I always throw the fish back into the water, just put a band-aid on his mouth, tap 'im on the patootie and let him on his way. And maybe some day, if I'm lucky, I'll get to catch him again.", "Shwooop. Hehe. You have to make those little noises, or it just doesn't work.", "People look at me like I'm a little strange, when I go around talking to squirrels and rabbits and stuff. That's ok. Thaaaat's just ok.", "Try to imagine that you are a tree. How do you want to look out here?", "We want happy paintings. Happy paintings. If you want sad things, watch the news.", "We're gonna make some big decisions in our little world.", "From all of us here I'd like to wish you happy painting...and God bless you my friend.", "And just go straight in like your going to stab it. And barely touch it...barely touch it.", "This old barn has seen it's better days, it's like me... it's had a rough life"];

//pick a random element
$todaysWisdom = array_rand($bobWisdom, 1);

//send the random Bob wisdom back
if($text === "/bob" || "/bob@BobRossBot") {
	file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$bobWisdom[$todaysWisdom]);
}


?>