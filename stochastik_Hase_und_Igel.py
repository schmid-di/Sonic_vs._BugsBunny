
import random
import time

cont = True
rounds = 10000
i = 1

movementHase = []
stepsHase = 0
winsHase = 0

movementIgel = []
stepsIgel = 0
winsIgel = 0


#Init Hase
movementHase.append(0)
movementHase.append(9)
movementHase.append(-9)
movementHase.append(3)
movementHase.append(-1)

#Init Igel
movementIgel.append(4)
movementIgel.append(-3)
movementIgel.append(1)

_start = time.time()
while i <= rounds:
    print("---Neue Runde (" + str(i) + "/" + str(rounds) + ")---")
    cont = True
    stepsHase = 0
    stepsIgel = 0
    
    

    while cont:  
        
        randHase = random.randint(0, 4)
        randIgel = random.randint(0, 2)

        stepsHase = stepsHase + movementHase[randHase]
        stepsIgel = stepsIgel + movementIgel[randIgel]
         
        if (stepsHase > 70 ):
            cont = False
            winsHase += 1
        elif (stepsIgel > 70):
            cont = False
            winsIgel += 1
     
    i += 1

_end = time.time()
print("Elapsed: " + str(_end - _start))
print("Wins Hase: " + str(winsHase))
print("Wins Igel: " + str(winsIgel))
    