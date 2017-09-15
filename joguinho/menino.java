import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class menino here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class menino extends Actor
{
     GreenfootImage[] myImage = new GreenfootImage[11];
     GreenfootImage[] myImage2 = new GreenfootImage[5];
     GreenfootImage[] jump = new GreenfootImage[6];
     boolean left = false, right = false;
        
        public menino(){
         
        myImage[0] = new GreenfootImage("menino1.png");
        myImage[1] = new GreenfootImage("menino2.png");
        myImage[2] = new GreenfootImage("menino3.png");
        myImage[3] = new GreenfootImage("menino4.png");
        myImage[4] = new GreenfootImage("menino5.png");
        myImage[5] = new GreenfootImage("menino6.png");
        myImage[6] = new GreenfootImage("menino7.png");
        myImage[7] = new GreenfootImage("menino8.png");
        myImage[8] = new GreenfootImage("menino9.png");
        myImage[9] = new GreenfootImage("menino10.png");
        myImage[10] = new GreenfootImage("menino11.png");
        myImage2[0] = new GreenfootImage("menino3m.png");
        myImage2[1] = new GreenfootImage("menino5m.png");
        myImage2[2] = new GreenfootImage("menino1m.png");
        jump[0] = new GreenfootImage("menino9.png");
        jump[1] = new GreenfootImage("menino10.png");
        jump[2] = new GreenfootImage("menino11.png");
        jump[3] = new GreenfootImage("menino9m.png");
        jump[4] = new GreenfootImage("menino10m.png");
        jump[5] = new GreenfootImage("menino11m.png");
        
        
        }
    
    /**
     * Act - do whatever the menino wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
    {
       runRight();
       runLeft();
       jump();
       
    }
    
    public void runRight(){
     if(Greenfoot.isKeyDown("right")){
          Greenfoot.delay(5);
          this.setImage(myImage[2]);
          setLocation(getX()+20,getY());
          Greenfoot.delay(5);
          this.setImage(myImage[4]);
          Greenfoot.delay(5);
          this.setImage(myImage[0]);
          right = true;
        }
    
    }
    
    public void runLeft(){
    if(Greenfoot.isKeyDown("left")){
          Greenfoot.delay(5);
          this.setImage(myImage2[0]);
          setLocation(getX()-20,getY());
          Greenfoot.delay(5);
          this.setImage(myImage2[1]);
          Greenfoot.delay(5);
          this.setImage(myImage2[2]);
          left = true;
        }
    }
    
    public void jump(){
   if(Greenfoot.isKeyDown("up")){
    if(left){
          Greenfoot.delay(5);
          this.setImage(jump[3]);
          setLocation(getX(),getY()-60);
          Greenfoot.delay(5);
          setLocation(getX(),getY()+30);
          this.setImage(jump[4]);
          Greenfoot.delay(5);
          setLocation(getX(),getY()+30);
          this.setImage(jump[5]);
    left= false;
    }
    if(right){
        Greenfoot.delay(5);
          this.setImage(jump[0]);
          setLocation(getX(),getY()-60);
          Greenfoot.delay(5);
          setLocation(getX(),getY()+30);
          this.setImage(jump[1]);
          Greenfoot.delay(5);
          setLocation(getX(),getY()+30);
          this.setImage(jump[2]);

          right=false;
    }
}
    }
    
}
