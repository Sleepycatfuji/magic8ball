<?php
function magic8Ball()
{
  echo "Tell me your question\n";

  $question = readline(">");
  echo "\nHmm I see... Your question is $question... I have consulted the experts in the spirit world. \nHere is your answer: ";

  $choice = rand(1, 19);
  if($choice === 0){
    echo "It is certain.\n";
  }
  elseif ($choice === 2){
    echo "It is decidedly so.\n";
  }
  elseif ($choice === 3){
    echo "Without a doubt.\n";
  }
  elseif ($choice === 4){
    echo "Yes - definitely.\n";
  }
  elseif ($choice === 5){
    echo "You may rely on it.\n";
  }
  elseif ($choice === 6){
    echo "As I see it, yes.\n";
  }
  elseif ($choice === 7){
    echo "Most likely.\n";
  }
  elseif ($choice === 8){
    echo "Outlook good.\n";
  }
  elseif ($choice === 9){
    echo "Yes.\n";
  }
  elseif ($choice === 10){
    echo "Signs point to yes.\n";
  }
  elseif ($choice === 11){
    echo "Reply hazy, try again.\n";
  }
  elseif ($choice === 12){
    echo "Ask again later.\n";
  }
  elseif ($choice === 13){
    echo "Better not tell you now.\n";
  }
  elseif ($choice === 14){
    echo "Cannot predict now.\n";
  }
  elseif ($choice === 15){
    echo "Concentrate and ask again.\n";
  }
  elseif ($choice === 16){
    echo "Don't count on it.\n";
  }
  elseif ($choice === 17){
    echo "My reply is no.\n";
  }
  elseif ($choice === 18){
    echo "My sources say no.\n";
  }
  elseif ($choice === 19){
    echo "Outlook not so good.\n";
  }
  elseif ($choice === 20){
    echo "Very doubtful.\n";
}
}
