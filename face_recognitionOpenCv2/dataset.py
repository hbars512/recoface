import cv2
import os

web_cam = cv2.VideoCapture(0)

cascPath = "Cascades/haarcascade_frontalface_default.xml"
faceCascade = cv2.CascadeClassifier(cascPath)

count = 0
nombre = input("Codigo del docente: ")

directorio = "images/"+nombre

try:
    os.stat(directorio)
except:
    os.mkdir(directorio)

while(True):
    _, imagen_marco = web_cam.read()

    grises = cv2.cvtColor(imagen_marco, cv2.COLOR_BGR2GRAY)

    rostro = faceCascade.detectMultiScale(grises, 1.5, 5)

    for(x,y,w,h) in rostro:
        cv2.rectangle(imagen_marco, (x,y), (x+w, y+h), (255,0,0), 4)
        count += 1
       
        cv2.imwrite("images/"+nombre+"/"+nombre+"_"+str(count)+".jpg", grises[y:y+h, x:x+w])
        cv2.imshow("Creando Dataset", imagen_marco)

    if cv2.waitKey(1) & 0xFF == ord('q'):
        break
    elif count >= 400:
        break


# Cuando todo está hecho, liberamos la captura
web_cam.release()
cv2.destroyAllWindows()
