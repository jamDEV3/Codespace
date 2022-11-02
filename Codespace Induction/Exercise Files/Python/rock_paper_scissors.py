#Random used to generate computer's answer

import random

#Declaring score values at the start

player_score = 0
com_score = 0


#Loop made to automate the replay functionality


while True:

    player = input("Choose Rock, Paper or Scissors:\n").lower()

    rps_list = ["rock" , "paper" , "scissors"]

    a = rps_list[0]
    b = rps_list[1]
    c = rps_list[2]

#Random answer generated from list of items for computer's answer

    com = random.choice(rps_list)

    print(com)

#Conditions based on both user's and computer's answer to determine the winner, displaying messages and/or changing the score values

    if player == com:
        print("Draw!\n")
    elif (player == a and com == c) or (player == b and com == a) or (player == c and com == b):
        print("Congratulations, you won!\n")
        player_score += 1
    else:
        print("You lost :(\n")
        com_score += 1

#Displaying scores at the end of the round
    
    print(player_score)
    print(com_score)

    input("Play again? Press any button!\n")
