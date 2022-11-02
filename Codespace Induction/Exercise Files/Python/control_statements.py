# Program that accepts 3 numbers from user. It checks if all numbers are equal or not, responding with the appropriate message

a = int(input("Enter a number:\n"))
b = int(input("Enter another number:\n"))
c = int(input("Enter one more number:\n"))


#Control statements to check whether inputs are equal or not

if a == b == c:
    print("These numbers are all equal!\n")
else:
    print("These numbers are not equal.\n")
