import openai


api_key = ""


openai.api_key = api_key


prompt = "¿Qué es ChatGPT?"
model = "text-davinci-003"  


response = openai.Completion.create(
    engine=model,
    prompt=prompt,
    max_tokens=50,  
    language="es", 
)

print(response.choices[0].text)

