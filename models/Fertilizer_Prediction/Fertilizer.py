import numpy as np
import pickle
import json
import sys
import warnings
warnings.filterwarnings('ignore')

# Getting the input
jn = sys.argv[1]
jp = sys.argv[2]
jk = sys.argv[3]
jtemp = sys.argv[4]
jhumidity = sys.argv[5]
jmoist = sys.argv[6]
jsoil = sys.argv[7]
jcrop = sys.argv[8]

# Parsing JSON strings into Python objects
n = json.loads(jn)
p = json.loads(jp)
k = json.loads(jk)
temp = json.loads(jtemp)
humidity = json.loads(jhumidity)
moist = json.loads(jmoist)
soil = json.loads(jsoil)
crop = json.loads(jcrop)

# Loading crop recommendation model
recommendation_model = pickle.load(open("models\Fertilizer_Prediction\\fertilizer_prediction.pkl", 'rb'))

dsoil = {"Black": 0, "Clayey": 1, "Loamy": 2, "Red": 3, "Sandy": 4}
dcrop = {"Barley": 0, "Cotton":	1, "Ground Nuts": 2, "Maize": 3, "Millets":	4,"Oil seeds": 5, "Paddy": 6,
         "Pulses": 7, "Sugarcane": 8, "Tobacco": 9, "Wheat": 10}
dfert = {0: "10-26-26", 1: "14-35-14", 2: "17-17-17", 3: "20-20", 4: "28-28", 5: "DAP", 6: "Urea"}

# passing the values into the model
user_input = np.array([[temp,humidity,moist,soil,crop,n,k,p]])
# user_input = np.array([[11, 23, 28, dsoil['Loamy'], dcrop['Paddy'], 22, 16, 93]])

#Make predictions using the trained model
predictions = recommendation_model.predict(user_input)

#Print the predicted crop
print(str(dfert[predictions[0]]))