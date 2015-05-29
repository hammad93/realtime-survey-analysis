package com.ucfsurveys.ucfsurveys;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;


public class SurveySelection extends Activity implements View.OnClickListener {
    int i = 0;
    TextView textView;
    ListView SurveyList;
    ArrayAdapter mArrayAdapter;
    ArrayList<String> mNameList = new ArrayList<String>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_survey_selection);
        textView = (TextView)findViewById(R.id.survey_available_text);

        SurveyList = (ListView)findViewById(R.id.Survey_Listview);
        for(; i < 10; i++){
            mNameList.add(getString(R.string.survey_name) + i);
        }
        mArrayAdapter = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1, mNameList);

        SurveyList.setAdapter(mArrayAdapter);
    }


    @Override
    public void onClick(View v) {
        i++;
        mNameList.add(getString(R.string.survey_name) + i);
        mArrayAdapter.notifyDataSetChanged();
    }
}
