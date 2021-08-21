import discord
import time
import requests
import json
import re #계산을 위한 특수문자 제거

client = discord.Client()

korea = "http://api.corona-19.kr/korea?serviceKey="
key = "여기에_API키를_입력해주세요" #API 키(https://api.corona-19.kr/ 에서 무료 발급 가능)

response = requests.get(korea + key)
text = response.text
data = json.loads(text)

@client.event
async def on_ready():
    client_id = str(client.user.id)
    print('Client ID: ' + client_id)
    print("디스코드 봇이 준비되었습니다!")
    game = discord.Game("!상황 명령어로 코로나19 상황 보기")
    await client.change_presence(status=discord.Status.online, activity=game)
    print("")


@client.event
async def on_message(message):
    if message.content.startswith("!상황"):
        response = requests.get(korea + key)
        text = response.text
        data = json.loads(text)
        await message.channel.send(
          "=== [ " + data["updateTime"] + "상황 ] ===\n\n" + 
          "국내 확진자: " + data["TotalCase"] + "\n" + 
          "국내 완치자: " + data["TotalRecovered"] + "\n" + 
          "국내 사망자: " + data["TotalDeath"] + "\n" + 
          "국내 치료중: " + data["NowCase"] + "\n\n" +
          "더 자세한 정보는 https://corona-19.kr/ 에서 확인하세요."
        )
        print("정보 요청: 국내 상황 정보")
        

client.run("your_client_id")
