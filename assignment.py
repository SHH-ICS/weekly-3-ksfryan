#The variable a is determined depending on if the input is large and extra large if large then a = 6.
print("Welcome to github Pizzaria!!")
x = input("large or extra large: ")
if x == "large":
  a = 6

elif x == "extra large" or "xl" or "xl" or "Extra Large":
  a = 10

else:
    print("Invalid size")
    a = 0

y = input("Enter amount of toppings:")
if y == "1":
  a = a + 1
  
elif y == "2":
  a = a + 1.75
  
elif y == "3":
  a = a + 2.50
  
elif y == "4":
  a = a + 3.35

else:
  print("Invalid number of toppings")

c = "Your total with tax is" 
h = round(float(a) * 1.13,2)  #rounding the number and adding tax
print(c,h)
