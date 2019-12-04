int p;
void setup(){
  Serial.begin(9600);
  pinMode(11,OUTPUT); ///trigger to ultrasonic(send to ultrasonic)
  pinMode(12,INPUT); ///echo from ultrasonic(receive from ultrasonic)
}
void loop(){
  digitalWrite(11, 0);
  digitalWrite(11,1);
  digitalWrite(11, 0);
  p=(pulseIn(12,HIGH)*0.0190); ////speed of sound :380m/s
//  if(Serial.available()>0){
//    if(Serial.read())
    Serial.println(p);
  //}
  delay(2000);
}
