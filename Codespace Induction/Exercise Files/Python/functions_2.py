#Provides factorial for number that user inputs


#Declares function
def facto(n):

#Conditional statement for calculating a factorial, assuming the value is not equal to 1
    if n==0:
        return 1
    else:
        return n*facto(n-1)

#Declares number from user input, and uses the number as an argument within the function
x = int(input("Enter a number to find out its factorial:\n"))
y = facto(x)

#Displays solution in an equation
print("{}! = {}".format(x,y))
        
        
    
    
