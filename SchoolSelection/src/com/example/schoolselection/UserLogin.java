package com.example.schoolselection;

import java.io.IOException;

import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

public class UserLogin extends ActionBarActivity {

	String nameS;
	String schoolS;
	String countryS ;
	String stateS;
	String cityS ;
	String preStudS ;
	String expecStudS ;
	String appCostS ;
	String freqNDS ;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_user_login);
		
		Button submit = (Button)findViewById(R.id.userSub);
		
		final EditText name = (EditText)findViewById(R.id.name);
		final EditText school = (EditText)findViewById(R.id.school);
		final EditText country = (EditText)findViewById(R.id.country);
		final EditText state = (EditText)findViewById(R.id.state);
		final EditText city = (EditText)findViewById(R.id.city);
		final EditText preStud = (EditText)findViewById(R.id.preStud);
		final EditText expecStud = (EditText)findViewById(R.id.expecStud);
		final EditText appCost = (EditText)findViewById(R.id.appCost);
		final EditText freqND = (EditText)findViewById(R.id.freqND);
		final Spinner resp = (Spinner)findViewById(R.id.resp);
		final Spinner coop = (Spinner)findViewById(R.id.coop);
		final Spinner durtn = (Spinner)findViewById(R.id.duratn);
		
		
		submit.setOnClickListener(new OnClickListener(){

			@Override
			public void onClick(View v) 
			{
				 nameS = name.getText().toString();
				 schoolS = school.getText().toString();
				 countryS = country.getText().toString();
				 stateS = state.getText().toString();
				 cityS = city.getText().toString();
				 preStudS = preStud.getText().toString();
				 expecStudS = expecStud.getText().toString();
				 appCostS = appCost.getText().toString();
				 freqNDS = freqND.getText().toString();
				 
				RemoteDB rem = new RemoteDB();
				try {
					rem.connect("ec2-52-69-65-82.ap-northeast-1.compute.amazonaws.com/jawad.php", "insert into school('Name','UserName','NoOfStudent','CostOfSchool','Responsiveness','Support','TimeLine','Intake','State','Country','Place','FreqND') " +
							"values('"+schoolS+"','"+nameS+"','"+preStudS+"','"+appCostS+"','"+resp.getSelectedItem().toString()+"','"+coop.getSelectedItem().toString()+"','"+durtn.getSelectedItem().toString()+"','"+expecStudS+"','"+stateS+"','"+countryS+"','"+cityS+"','"+freqNDS+"'");
				} catch (IOException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				Toast.makeText(getApplicationContext(), "Row inserted successfully", Toast.LENGTH_SHORT).show();
			}
			
		});
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.user_login, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
}
