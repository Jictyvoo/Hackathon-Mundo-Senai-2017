import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class f here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class f extends World
{

    /**
     * Constructor for objects of class f.
     * 
     */
    public f()
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
        campo2 campo2 = new campo2();
        addObject(campo2,311,205);
        campo2.setLocation(301,203);
        campo2.setLocation(300,202);
        campo2.setLocation(301,201);
        campo2.setLocation(301,200);
        campo2.setLocation(300,199);
        menino menino = new menino();
        addObject(menino,49,283);
        aspirina aspirina = new aspirina();
        addObject(aspirina,219,6);
        dipirona dipirona = new dipirona();
        addObject(dipirona,327,5);
        neosoro neosoro = new neosoro();
        addObject(neosoro,440,10);
        paracetamol paracetamol = new paracetamol();
        addObject(paracetamol,554,10);
    }
}
