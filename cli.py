import requests
from sys import argv
import numpy as np

def printUsage():
    print("Usage: " + argv[0] + " [command] [option]\nFor more info do " + argv[0] + "-h")

def printHelp():
    print("""\
    Available options:\t\tWhat it does:
        -h or --help\t\tDisplay this message
        -l or --list\t\tDisplay all sounds available
        -r or --random\t\tPlays a random sound
        -p or --play\t\tPlays the given sound
    """)

def getAllSounds():
    res = requests.get("http://spinlock.fe.up.pt/getAllSounds.php")
    return res

def playSound(snd):
    res = requests.get("http://spinlock.fe.up.pt/play.php?file=" + snd + ".mp3")

if len(argv) == 1:
    printUsage()
elif len(argv) == 2:
    if argv[1] == "-h" or argv[1] == "--help":
        printHelp()
    elif argv[1] == "-l" or argv[1] == "--list":
        print(getAllSounds().text.replace(' ', '\n'))
    elif argv[1] == "-r" or argv[1]:
        sounds = getAllSounds().text.split(' ')
        np.random.shuffle(sounds)
        playSound(sounds[0].split('.')[0])

else:
    if argv[1] == "-p" or argv[1] == "--play":
        #if argv[2] in getAllSounds():
        playSound(argv[2])
        #else:
        #    print("That sound does not exist, here are the available sounds: \n" + getAllSounds())

    
