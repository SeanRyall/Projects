import java.awt.Color;
import java.awt.GradientPaint;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Paint;
import java.awt.RadialGradientPaint;
import java.awt.Rectangle;
import java.awt.RenderingHints;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.geom.Ellipse2D;
import java.awt.geom.GeneralPath;
import java.awt.geom.Point2D;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;

import javax.swing.Timer;

import javax.swing.JPanel;

public class AnimationScreen extends JPanel{
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private Random randomNum = new Random(); 
	private Random randomNum2 = new Random();
	
	

	Shape circle = new Circle();
	Shape square = new Square();
	Shape oval = new Oval();
	Shape heart = new Heart();
	
	public static List<Shape> shapes = new ArrayList<Shape>();
	
	private void addShapes() {
		shapes.add(new Circle());
		shapes.add(new Square());
		shapes.add(new Oval());
		shapes.add(new Heart());
    }
	

	public List<Shape> getShapes() {
		return shapes;
	}
	
	
	
//	public void setShapes(List<Shape> shapes) {
//		this.shapes = shapes;
//	}

	
	private Timer timer = new Timer(35, new TimerAction());
	
	int x = 0;
	int y = 0;
	int velocityX = 20;
	int velocityY = 20;
	
	int m = 200;
	int n = 200;
	
	int xx;
	int yy;
	
//	Shape circle = new Circle();
	
//	double a = MainWindow.x;
//	double b = MainWindow.y;
	
	
	
	

	@Override 
	public void paintComponent(Graphics g)
	{
		
		Graphics2D g2d = (Graphics2D)g;
		
		
//		System.out.println(shapes);
		
		super.paintComponent(g);
		
		
//	      int shape;
//	      
//	      for ( int i = 0; i < 100; i++ ) 
//	      {
//	         shape = randomNum.nextInt( 4 ); // pick a random shape
//	      
//	         // draw different shapes
//	         switch( shape ) 
//	         {
//	             case 0:
//	            	 circle.draw(g2d);
//	             case 1:
//	            	 oval.draw(g2d);
//	             case 2:
//	            	 square.draw(g2d);
//	             case 3:
//	            	 heart.draw(g2d);
//	               break;
//	         }}
		
		
		
//		Rectangle r = MainWindow.JFrame.getBounds();
//		int h = r.height;
//		int w = r.width;
		
		 
		
//		for (Shape s : shapes) {
//            getShapes();	
//		}
		
//		for (int i = 0; i < shapes.size(); i++) {
//			shapes[i].draw(g2d);
//		}
		
//		for(int i=0; i<shapes.size(); i++){
//            shapes.get(i).draw(g2d);;
//        }
//		addShapes();
		
		
//		for( Shape shape: shapes ){
//		    shapes.add( new Circle() );
//		}
		
//		drawEllipse(g2d);
//		 
		
		
//		drawHeart(g2d);
//		    
//			drawCircle(g2d); 
//			drawSquare(g2d);
//			drawLine(g2d);
//			drawFilledInCircle(g2d);
//			drawHourGlass(g2d);
//			drawShinyBall(g2d);
//			drawHeart(g2d);
////			drawCircle(x, y);
//			rectangle.draw(g2d);
			circle.draw(g2d);
			oval.draw(g2d);
			square.draw(g2d);
			heart.draw(g2d);
//			g2d.setColor(Color.green);
//			Ellipse2D circle = new Ellipse2D.Double(xx,yy,100,100);
//			g2d.fill(circle);
			
			
			
			

			
//			for (Shape s : shapes) {
//            s.draw(g2d);
//        }
			
			timer.start();
	
			
	    }
	private class TimerAction implements ActionListener
	{
	
	@Override
	public void actionPerformed(ActionEvent e) {
//		
//		move1();
		
		
//		
		circle.move();
		square.move();
		oval.move();
		heart.move();
//		
//		if (xx < 0 || xx > 580)
//			velocityX = - velocityX;
//		if (yy < 0 || yy > 360)
//			velocityY = - velocityY;
//		
//		xx += velocityX;
//		yy += velocityY;
		
//		if (m < 0 || m > 600)
//			velocityX = - velocityX;
//		if (n < 0 || n > 380)
//			velocityY = - velocityY;
//		
//		m += velocityX;
//		n -= velocityY;
		
		
//		drawCircle(x, y);
		
		repaint();
		
	}
	
	}
		
		 

	public void drawEllipse(Graphics2D g2d){
		Ellipse2D circle = new Ellipse2D.Double(x,y,100,100);
		g2d.fill(circle);
		g2d.setColor(Color.green);
		
	}
	
	
	
	public void drawCircle(int x, int y) {
        Graphics g = this.getGraphics();
        g.drawOval(x, y, x, y);
        g.setColor(Color.BLACK);
        g.fillOval(1,2,3,4);
    }
	
	
	
	
	
	private void drawHeart(Graphics2D g2d) {
		
		g2d.setRenderingHint(RenderingHints.KEY_ANTIALIASING,RenderingHints.VALUE_ANTIALIAS_ON);
		g2d.setColor(Color.pink);
//		g2d.fillOval(40, 10, 150, 150);
		
		GeneralPath pen = new GeneralPath();
		
		pen.moveTo(m,n);
		pen.curveTo(m-100, n-100, m-190, n, m, n+100);
		pen.curveTo(m+190, n, m+100, n-100, m, n);
		pen.closePath();
		
		g2d.fill(pen);
	
}


	private void drawShinyBall(Graphics2D g2d) {
		
		int width = 100;
		int height = 100;
		
		g2d.setRenderingHint(RenderingHints.KEY_ANTIALIASING,RenderingHints.VALUE_ANTIALIAS_ON);
		
		g2d.setColor(Color.green);
		g2d.fillOval(x, y, width, height);	
		
		Paint p;
		p = new GradientPaint(0, 0, new Color(0.0f, 0.0f, 0.0f, 0.0f), 0, width, new Color(0,0,0,200));
		g2d.setPaint(p);
		g2d.fillOval(x, y, width, height);
		
		p = new GradientPaint(0, 0, new Color(1.0f, 1.0f, 1.0f, 0.0f), 0, height, new Color(1.0f, 1.0f, 1.0f, 0.8f));
		g2d.setPaint(p);
		g2d.fillOval(x, y, width, height);
		
		p = new RadialGradientPaint(new Point2D.Double(x / 2.0, y / 2.0), width / 2.0f,
				new float[]{0.0f,1.0f}, 
				new Color[] {new Color(6,76,160,127), new Color(0.0f,0.0f,0.0f,0.8f)});
		g2d.setPaint(p);
		g2d.fillOval(x, y, width, height);
		
		g2d.setRenderingHint(RenderingHints.KEY_ANTIALIASING,RenderingHints.VALUE_ANTIALIAS_OFF);
		 
	}


	private void drawHourGlass(Graphics2D g2d)
	{
		g2d.setColor(Color.green);
		
		int xValues[] = {0,200,0,200};
		int yValues[] = {0,200,200,0};
		
		GeneralPath pen = new GeneralPath();
		
		pen.moveTo(xValues[0], yValues[0]);
		pen.lineTo(xValues[1], yValues[1]);
		pen.lineTo(xValues[2], yValues[2]); 
		pen.lineTo(xValues[3], yValues[3]);
		pen.closePath();
		
		g2d.fill(pen);
		
	}
	
	private void drawFilledInCircle(Graphics2D g2d)
	{
		g2d.setColor(Color.blue);
		g2d.fillOval(x, y, 150, 150);
		
	}
	
	private void drawLine(Graphics2D g2d)
	{
		//g.setColor(new Color(255, 0, 255));
		g2d.setColor(new Color(0xFF00FF)); 
		g2d.drawLine(100, 300, 200, 125);
		
	}
	
	private void drawCircle(Graphics2D g2d)
	{
	
		g2d.setRenderingHint(RenderingHints.KEY_ANTIALIASING, RenderingHints.VALUE_ANTIALIAS_ON);
		
		g2d.drawOval(x, y, 200, 200);
		 
	}
	
	private void drawSquare(Graphics2D g2d)
	{
		g2d.setColor(Color.RED);
		g2d.drawRect(0, 0, 200, 200);
		
	}



	
	private void move1(int x, int y)
	{
		
		if (x < 0 || x > 600)
			velocityX = - velocityX;
		if (y < 0 || y > 380)
			velocityY = - velocityY;
		
		x += velocityX;
		y += velocityY;
	}
	
	private void move2(int x, int y)
	{
		
		if (x < 0 || x > 600)
			velocityX = - velocityX;
		if (y < 0 || y > 380)
			velocityY = - velocityY;
		
		x -= velocityX;
		y += velocityY;
	}
	
	
//	private class TimerAction implements ActionListener
//	{
//		@Override
//		public void action
//		
//	}

}
