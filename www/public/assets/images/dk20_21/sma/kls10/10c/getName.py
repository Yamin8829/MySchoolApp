#import numpy
from PIL import Image
import os 

for foto in os.listdir('.'):
     # ext = ['.jpg', '.PNG']
  if foto.endswith(".png"):
    # print (foto)
   mana = Image.open(foto)
   print(mana.filename)
for foto2 in os.listdir('.'):
     # ext = ['.jpg', '.PNG']
  if foto2.endswith(".jpg"):
    # print (foto2)
   mana2 = Image.open(foto2)
   print(mana2.filename)
 