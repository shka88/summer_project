# import os

# # 주어진 디렉토리에 있는 항목들의 이름을 담고 있는 리스트를 반환합니다.
# # 리스트는 임의의 순서대로 나열됩니다.
# file_path = 'C:\\Users\\jeong\\Desktop\\사진\\pictures'
# file_names = os.listdir(file_path)



# i = k_item +1
# for name in file_names:
#     src = os.path.join(file_path, name)
#     dst = str(i) + '.jpg'
#     dst = os.path.join(file_path, dst)
#     os.rename(src, dst)
#     i += 1


# import os
 
# def changeName(path, cName):
#     files = glob.glob('./testdir/*')
#     i = 1
#     for filename in os.listdir(path):
#         print(path+filename, '=>', path+str(cName)+str(i)+'.png')
#         os.rename(path+filename, path+str(cName)+str(i)+'.png')
#         i += 1

# import os
# import glob

# path = "./img"
# files = glob.glob(path + '/*')

# for f in files:
#     os.rename(f, os.path.join(path, 'k_item' + os.path.basename(f)))
#     #os.rename(f, os.path.join('k_item' + os.path.basename(f)))

import os
import glob

path = "./img"
files = glob.glob(path + '/*')

for f in files:
    os.rename(f, os.path(path, 'k_item' + os.path.basename(f))
    # os.rename(f, os.path.join(path, 'k_item' + os.path.basename(f)))



