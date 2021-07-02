import os
import glob
from PIL import Image

path = "./img"
files = glob.glob(path + '/*')

for f in files:
    title, ext = os.path.splitext(f)
    if ext in ['.jpg', '.png']:
        img = Image.open(f)
        img_resize = img.resize((50, 30))
        # img_resize.save(title + '_half' + ext)
        img_resize.save(title+ ext)


        
