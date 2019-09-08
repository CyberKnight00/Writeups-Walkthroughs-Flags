#include<iostream>
#include<string>
#include<bits/stdc++.h>
using namespace std;
int main()
{
string s;
cout<<"enter password: ";
cin>>s;
if(s=="backup_password")
{
cout<<"good"<<endl;
system("/bin/cp /root/enc.txt /home/saket/enc.txt");
system("/bin/cp /root/key.txt /home/saket/key.txt");
}
return 0;
}