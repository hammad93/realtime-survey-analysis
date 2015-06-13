package com.ucfsurveys.ucfsurveys;

import android.content.Context;
import android.util.AttributeSet;

/**
 * Created by cwg93_000 on 6/13/2015.
 */
public class AnswerViewFactory {

    Context context;
    AttributeSet attrs;

    public AnswerViewFactory(Context context, AttributeSet attrs){
        this.context = context;
        this.attrs = attrs;
    }


    public AnswerView makeAnswerView(String answerType){
        AnswerView answers = null;
        if(answerType.equals("MultipleChoice")){
            answers = new MultipleChoiceAnswerView(context, attrs);
        }
        return answers;
    }


}
