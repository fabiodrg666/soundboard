import requests
from sys import argv
import numpy as np

def printUsage():
    print("Usage: " + argv[0] + " [command] [option]\nFor more info do " + argv[0] + " -h")

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
    print(res.text.replace(" ", "\n"))
    return res.text.replace(" ", "\n")

def playSound(snd):
    res = requests.get("http://spinlock.fe.up.pt/play.php?file=" + snd + ".mp3")

def playRandomSound():
    sounds = getAllSounds().split("\n")
    np.random.shuffle(sounds)
    playSound(sounds[0].split('.')[0])

commands = {"-h": printHelp, "--help": printHelp, "-l": getAllSounds, "--list": getAllSounds, "-r": playRandomSound, "--random": playRandomSound, "-p": playSound, "--play": playSound}

if len(argv) == 1:
    printUsage()
else:
    if len(argv) == 2:
        commands[argv[1]]()
    else:
        commands[argv[1]](argv[2])
        
