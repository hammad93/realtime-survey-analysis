package com.ucfsurveys.ucfsurveys;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;


public class SurveySelection extends Activity implements View.OnClickListener, AdapterView.OnItemClickListener {
    int i, selectedPosition;
    long selectedId;
    TextView titleView;
    TextView selectedView;
    Button selectSurveyButton;
    ListView SurveyList;
    ArrayAdapter mArrayAdapter;
    ArrayList<String> mNameList = new ArrayList<String>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_survey_selection);
        titleView = (TextView)findViewById(R.id.survey_available_text);
        selectSurveyButton = (Button)findViewById(R.id.select_survey_btn);
        SurveyList = (ListView)findViewById(R.id.Survey_Listview);
        for(i=0; i < 5; i++){
            mNameList.add(getString(R.string.survey_name) + i);
        }
        mArrayAdapter = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1, mNameList);

        SurveyList.setAdapter(mArrayAdapter);

        selectSurveyButton.setOnClickListener(this);
        SurveyList.setOnItemClickListener(this);
    }


    @Override
    public void onClick(View v) {
        Intent nextActivity = new Intent(this, MultipleChoiceQuestion.class);
        nextActivity.putExtra(Intent.EXTRA_TEXT, selectedView.getText());
        startActivity(nextActivity);
    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
        if(selectedView!=null){
            selectedView.setBackgroundColor(Color.WHITE);
        }
        selectedId = id;
        selectedPosition = position;
        selectedView = (TextView)view;
        selectedView.setBackgroundColor(Color.LTGRAY);
    }
}
//Zbft195*