package com.example.schoolselection;

import java.io.IOException;
import java.util.Timer;
import java.util.TimerTask;

import android.support.v7.app.ActionBarActivity;
import android.app.Dialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.os.Handler;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends ActionBarActivity {

	public int currentimageindex=0;
	Timer timer;
	TimerTask task;
	ImageView slidingimage;
	String loginId;
	String password;
	String access = null;
	
	boolean adminLogged = true;			//false
	boolean	userLogged = true;			//false
	private int[] IMAGE_IDS = {
			R.drawable.hhf1, R.drawable.hhf2, R.drawable.hhf3,
			R.drawable.hhf4,R.drawable.hhf5
		};
	
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		final Handler mHandler = new Handler();

        // Create runnable for posting
        final Runnable mUpdateResults = new Runnable() {
            public void run() {
            	
            	AnimateandSlideShow();
            	
            }
        };
		
        int delay = 1000; // delay for 1 sec.

        int period = 8000; // repeat every 4 sec.

        Timer timer = new Timer();

        timer.scheduleAtFixedRate(new TimerTask() {

        public void run() {

        	 mHandler.post(mUpdateResults);

        }

        }, delay, period);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}
	private void AnimateandSlideShow() {
    	
    	
    	slidingimage = (ImageView)findViewById(R.id.imageView1);
   		slidingimage.setImageResource(IMAGE_IDS[currentimageindex%IMAGE_IDS.length]);
   		
   		currentimageindex++;
    	
   		Animation rotateimage = AnimationUtils.loadAnimation(this, R.anim.custom_anim);
    	  
        
    	  slidingimage.startAnimation(rotateimage);
          
          	 
        
    }
	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		final int id = item.getItemId();
		
		if(id == R.id.login)
		{
			final Dialog dialog = new Dialog(MainActivity.this);
	        // Include dialog.xml file
	        dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
	
	        dialog.setContentView(R.layout.login);
	        dialog.show();
	        
	       
	        Button declineButton = (Button) dialog.findViewById(R.id.button1);
	        // if decline button is clicked, close the custom dialog
	        declineButton.setOnClickListener(new OnClickListener() {
	            @Override
	            public void onClick(View v) {
	                // Close dialog
	            	EditText idEt = (EditText)findViewById(R.id.editText1);
	                EditText passEt = (EditText)findViewById(R.id.editText2);
	                 
	                loginId = idEt.getText().toString();
	                password = passEt.getText().toString();
	                 
	                  
	                
	                String sha256hex = org.apache.commons.codec.digest.DigestUtils.sha256Hex(password);
	                
	                new Login().execute("select status from user where 'Id'='"+loginId+"' AND 'Password'='"+sha256hex+"'");		//uncomment
	            	
	                dialog.dismiss();
	                change();
	            }
	        });
		}
	
		return super.onOptionsItemSelected(item);
	}
	private class Login extends AsyncTask<String,String,String>
	{
		ProgressBar pb = (ProgressBar)findViewById(R.id.progressBar1);
		TextView plzWait = (TextView)findViewById(R.id.plzwait);
		
		@Override
		protected void onPreExecute() 
		{
			pb.setVisibility(View.VISIBLE);
			plzWait.setVisibility(View.VISIBLE);
			
			super.onPreExecute();
		}

		@Override
		protected void onPostExecute(String result) {
			pb.setVisibility(View.GONE);
			plzWait.setVisibility(View.GONE);
			
			if(adminLogged || userLogged)
			{
				Toast.makeText(getApplicationContext(), "Successfully logged In", Toast.LENGTH_SHORT).show();
				change();
			}
			else
			{
				Toast.makeText(getApplicationContext(), "Failed to logged In", Toast.LENGTH_SHORT).show();
				change();
			}
			
			
			super.onPostExecute(result);
		}

		@Override
		protected String doInBackground(String... params) 
		{
			RemoteDB rem = new RemoteDB();
            String x = null;
			try {
				x = rem.connect("ec2-52-69-65-82.ap-northeast-1.compute.amazonaws.com/jd2.php",params[0]);			//url
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			if(x.equals("1"))
            {
            	
            		adminLogged = true;
               	 	userLogged = false;
            }
            else if(x.equals("0"))
           	{
	           	 	adminLogged = false;
	           	 	userLogged = true;
           	}
            
			// TODO Auto-generated method stub
			return null;
		}
		
	}
	public void change()
	{
		if(adminLogged)
		{
			Intent i = new Intent(getApplicationContext(),AdminLogin.class);
			startActivity(i);
		}
		else if(userLogged)
		{
			Intent i = new Intent(getApplicationContext(),UserLogin.class);
			startActivity(i);
		}
	}
}
