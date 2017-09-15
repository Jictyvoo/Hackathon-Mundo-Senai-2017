import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class fase1 here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class fase1 extends World
{
campo campo = new campo();
    /**
     * Constructor for objects of class fase1.
     * 
     */
    public fase1()
    {    
        // Create a new world with 600x400 cells with a cell size of 1x1 pixels.
        super(600, 400, 1); 
        prepare();
    }

    /**
     * Prepare the world for the start of the program.
     * That is: create the initial objects and add them to the world.
     */
    private void prepare()
    {
        menino menino = new menino();
        addObject(menino,52,308);
        menino.setLocation(49,274);
        menino.setLocation(53,282);
        menino.setLocation(52,292);
        
        addObject(campo,307,207);
        campo.setLocation(300,198);
        campo.setLocation(302,201);
        campo.setLocation(302,200);
        campo.setLocation(372,198);
        menino.setLocation(65,225);
        removeObject(menino);
        campo.setLocation(300,200);
        menino menino2 = new menino();
        addObject(menino2,49,283);
    }
    
    public campo getCampo(){
    return campo;
    }
}
