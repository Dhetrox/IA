import openai


api_key = "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"


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

