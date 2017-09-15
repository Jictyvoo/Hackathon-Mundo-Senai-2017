import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class paracetamol here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class paracetamol extends Actor
{
    /**
     * Act - do whatever the paracetamol wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
    {
        cair();
    } 
    
    public void cair(){
    if(getY()!=310){
    setLocation(getX(),getY()+60);
    }
}  
}
