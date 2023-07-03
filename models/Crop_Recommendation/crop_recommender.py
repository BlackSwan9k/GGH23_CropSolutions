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
jph = sys.argv[6]
jrainfall = sys.argv[7]

# Parsing JSON strings into Python objects
n = json.loads(jn)
p = json.loads(jp)
k = json.loads(jk)
temp = json.loads(jtemp)
humidity = json.loads(jhumidity)
ph = json.loads(jph)
rainfall = json.loads(jrainfall)

# Loading crop recommendation model
recommendation_model = pickle.load(open("models\Crop_Recommendation\Crop_recommender.pkl", 'rb'))

# passing the values into the model
user_input = np.array([[n,p,k,temp,humidity,ph,rainfall]])

#Make predictions using the trained model
predictions = recommendation_model.predict(user_input)

#Print the predicted crop
print(str(predictions[0]))