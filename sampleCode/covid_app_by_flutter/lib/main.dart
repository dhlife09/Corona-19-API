import 'dart:async';
import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:flutter_widget_from_html/flutter_widget_from_html.dart';

import 'package:http/http.dart' as http;

/**
 *
 *
 *  아래 serviceKey 변수에 API 키를 넣어주세요.
 *  API 키는 https://api.corona-19.kr 에서 무료로 발급받을 수 있습니다.
 *
 */


final serviceKey = '';  //여기에 API 키를 넣어주세요.

void main() => runApp(new MyApp());

// Model: Post
class Post {
  final String TotalCase;
  final String TotalRecovered;
  final String TotalDeath;
  final String NowCase;
  final String updateTime;

  Post({this.TotalCase, this.TotalRecovered, this.TotalDeath, this.NowCase, this.updateTime});

  factory Post.fromJson(Map<String, dynamic> json) {
    return Post(
      TotalCase: json['TotalCase'],
      TotalRecovered: json['TotalRecovered'],
      TotalDeath: json['TotalDeath'],
      NowCase: json['NowCase'],
      updateTime: json['updateTime'],
    );
  }
}

// Service: fetchPost
Future<Post> fetchPost() async {
  final url = 'http://api.corona-19.kr/korea/?serviceKey=';
  final response = await http.get(url + serviceKey);

  if (response.statusCode == 200) {
    final jsonBody = json.decode(response.body);
    return Post.fromJson(jsonBody);
  } else {
    throw Exception('Failed to load post');
  }
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return new MaterialApp(
      title: '코로나19',
      theme: new ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: new PostDetailPage(),
    );
  }
}

class PostDetailPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar: new AppBar(
        title: new Text('코로나19 App [by 굿바이코로나]'),
      ),
      body: new Column(
        children: <Widget>[
          FutureBuilder(
            future: fetchPost(),
            builder: (context, snapshot) {
              if (snapshot.hasData) {
                final TotalCase = snapshot.data.TotalCase;
                final TotalRecovered = snapshot.data.TotalRecovered;
                final TotalDeath = snapshot.data.TotalDeath;
                final NowCase = snapshot.data.NowCase;
                final updateTime = snapshot.data.updateTime;
                return Column(
                  children: <Widget>[
                    HtmlWidget(updateTime),
                    HtmlWidget('API 키는 <u>API.CORONA-19.KR</u> 웹사이트에서<br> 무료로 발급받을 수 있습니다.'),
                    HtmlWidget("확진자: " + TotalCase),
                    HtmlWidget("완치자: " + TotalRecovered),
                    HtmlWidget("사망자: " + TotalDeath),
                    HtmlWidget("치료중: " + NowCase),
                  ],
                );
              } else if (snapshot.hasError) {
                return Text("${snapshot.error}");
              }

              return CircularProgressIndicator();
            },
          ),
        ],
      ),
    );
  }
}