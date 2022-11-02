#Creates a times table for number inputted by user

a = int(input("Enter a number to see its multiplication table from 1-10:\n"))

#While loop for incrementing each iteration til it reaches 10

i = 1

while i <= 10:
    z = a*i

#Displays variables in the form of equations
    print("%d x %d = %d" % (a, i, z))
    i += 1
