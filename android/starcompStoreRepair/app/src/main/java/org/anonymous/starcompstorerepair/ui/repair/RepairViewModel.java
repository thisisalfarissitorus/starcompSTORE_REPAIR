package org.anonymous.starcompstorerepair.ui.repair;

import android.arch.lifecycle.LiveData;
import android.arch.lifecycle.MutableLiveData;
import android.arch.lifecycle.ViewModel;

public class RepairViewModel extends ViewModel {

    private MutableLiveData<String> mText;

    public RepairViewModel() {
        mText = new MutableLiveData<>();
        mText.setValue("This is Repair fragment");
    }

    public LiveData<String> getText() {
        return mText;
    }
}

