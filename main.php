import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  final List<String> myNames = [
    'Benjie',
    'John',
    'Teddy',
    'gwapo',
    'pogi'
 
  ];

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          backgroundColor: Colors.green,
          leading: Icon(Icons.home),
          title: Text('ListView Builder'),
          
        ),
        body: ListView.builder(
          itemCount: myNames.length,
          itemBuilder: (context, index) {
            return ListTile(
              leading: Icon(Icons.person),
              title: Text(myNames[index]),
              subtitle: Text('Letters: ${myNames[index].length}'),
            );
          },
        ),
      ),
    );
  }
}