import pandas as pd
import sys

df = pd.read_csv('models\Rainfall\\rainfall_data.csv')

def predict_rainfall(region, time):
    region_data = df[df['SUBDIVISION'] == region]
    avg_rainfall = region_data[time].mean()
    
    return avg_rainfall.round(2)

Jregion = sys.argv[1]
Jtime = sys.argv[2]

predicted_rainfall = predict_rainfall(Jregion, Jtime)
print(predicted_rainfall)