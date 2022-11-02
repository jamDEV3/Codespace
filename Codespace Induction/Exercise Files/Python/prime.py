#Create function to detect if number is Prime or not
def prime(n):

    #Declaring list of factors and range
    number_range = range(1,(n+1))

    factors = []

    #For loop comparing the modulo (remainder) between the number used and possible factors. Factors are added to a list
    for x in number_range:
        if int(n)%int(x) == 0:
            factors.append(x)

    #If statement checking whether there were any additional factors or not, determining its Prime status
    if factors == [1,n]:
        print("This is a Prime number.\n")
    else:
        print("This is not a Prime number.\n")


#Number is inputted by user
n = int(input("Enter a number to see if its a Prime Number!\n"))

prime(n)
            
