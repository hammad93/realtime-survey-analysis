package com.ucfsurveys.ucfsurveys;

import android.content.Context;
import android.net.ConnectivityManager;
import android.util.JsonReader;
import android.util.Log;

import org.json.JSONObject;
import android.content.Context;

import java.io.BufferedInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLClassLoader;
import java.net.URLConnection;
import android.net.ConnectivityManager;

/**
 * Created by cwg93_000 on 5/30/2015.
 */
public class ConnectionHandler {

    URL dburl;
    HttpURLConnection conn;
    InputStream in;
    public ConnectionHandler(String url) {
        try {
            dburl = new URL(url);
        }
        catch (MalformedURLException e){
            Log.e("Bad URL", e.toString());
        }
    }

    private void connect(int input){

        try{
            conn = (HttpURLConnection)dburl.openConnection();
        }
        catch (IOException e){
            Log.e("ERROR", e.toString());
        }
        if(input == 0) {
            try {
                in = new BufferedInputStream(conn.getInputStream());
            } catch (IOException e) {
                Log.e("ERROR", e.toString());
            }
        }else if(input == 1){

        }
    }
    private void disconnect(){
        try{
            in.close();
            conn.disconnect();
        }
        catch (IOException e){
            Log.e("ERROR", e.toString());
        }
    }

}
