import java.awt.CardLayout;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.EventQueue;
import java.awt.Rectangle;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.util.Random;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

public class MainWindow extends JFrame {
	
	

	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;




	private Random randomNum = new Random(); 

	
	
	
	static int x;

	static int y;
	
	
	static int w;

	static int h;
	
	private JPanel contentPane;
	static AnimationScreen screen;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					MainWindow frame = new MainWindow();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */

	
	
	public MainWindow() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 700, 500);
		contentPane = new JPanel();
//		contentPane.setVisible(true);
		
//		Dimension size = contentPane.getBounds().getSize();
		contentPane.setVisible(true);
		
		contentPane.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent e) {
//				AnimationScreen as = new AnimationScreen();
				
//				AnimationScreen.shapes.add(5, (Shape) getShape());
				x = e.getX();
				y = e.getY();
//				
//				Shape circle = new Circle(x,y,2, 3, 23,34,67);
				
				
			
//				screen.drawCircle(x, y);
//				as.paintComponentt(Graphics );
//
			    repaint();
			}
		});
		contentPane.setBorder(new EmptyBorder(0, 0, 0, 0));
		setContentPane(contentPane);
		contentPane.setLayout(new CardLayout(0, 0));
		
		AnimationScreen screen = new AnimationScreen();
		screen.setBackground(Color.BLACK);
		
		
		contentPane.add(screen, "name_121519895762115");
	}

}
