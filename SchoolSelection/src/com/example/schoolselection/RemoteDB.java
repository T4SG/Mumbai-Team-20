package com.example.schoolselection;

import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLConnection;
import java.net.URLEncoder;

public class RemoteDB 
{
	public String connect(String urlR, String query) throws IOException
	{
		String url = urlR;
		
		URL browser = new URL(url);
        URLConnection conn1 =  browser.openConnection();
        HttpURLConnection conn = (HttpURLConnection)conn1;
        String params = "fName=" + URLEncoder.encode(query, "UTF-8");
        
        conn.setRequestMethod("POST");
        conn.setRequestProperty("Content-Type", "application/x-www-form-urlencoded");
        conn.setRequestProperty("Connection", "Keep-Alive");
        conn.setRequestProperty("Content-Length", String.valueOf(params.length()));


        conn.setUseCaches(false);

        conn.setDoOutput(true);
        conn.setDoInput(true);
       
        DataOutputStream wr = new DataOutputStream(conn.getOutputStream());

        wr.write(params.getBytes(),0,params.getBytes().length);
        wr.flush();
        
        
        //read ------------------
        
        InputStream instr = conn.getInputStream();
        BufferedReader in;
        in = new BufferedReader(new InputStreamReader(instr));

        
        String inputLine;
        StringBuilder response = new StringBuilder();

        while ((inputLine = in.readLine()) != null) {
            response.append(inputLine);
        }
       
        wr.close();		
        in.close();
        conn.disconnect();
		return response.toString();
	}

}
