#Program accepts 3 numbers from user. Checks whether the order is increasing, decreasing or neither

#Program asks for 3 inputs

a = int(input("Enter a number:\n"))
b = int(input("Enter another number:\n"))
c = int(input("Enter one more number:\n"))


#Checks order which variables are sequenced in
if a < b < c:
    (print("The numbers are increasing in order.\n"))
elif a > b > c:
    (print("The numbers are decreasing in order.\n"))
else:
    (print("The numbers are in no particular order.\n"))
