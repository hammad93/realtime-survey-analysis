package com.ucfsurveys.ucfsurveys;

import android.content.Context;
import android.util.AttributeSet;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.ArrayList;

/**
 * Created by cwg93_000 on 6/11/2015.
 */
public class MultipleChoiceAnswerView extends AnswerView {
    ListView answerView;
    ArrayAdapter arrayAdapter;
    ArrayList<String> answerList;
    public MultipleChoiceAnswerView(Context context, AttributeSet attrs){

        super(context);
    }

    @Override
    void setAnswerView() {

    }
}
