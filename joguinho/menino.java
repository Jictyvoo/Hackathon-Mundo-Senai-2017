import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class menino here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class menino extends Actor
{
    
    /**
     * Act - do whatever the menino wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
    {
        GreenfootImage myImage;
    
        if(Greenfoot.isKeyDown("right")){
          myImage = new GreenfootImage("menino5.png");
          setLocation(getX()+1,getY());
          this.setImage(myImage);
          myImage = new GreenfootImage("menino4.png");
          this.setImage(myImage);
        }
    }    
}
