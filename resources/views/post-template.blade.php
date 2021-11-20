<!DOCTYPE html>
<html>
    @include('header')
    <div>
        <div class="mwi-full-layout">
            <div class="mwi-full-content"mwi-full-width-content>
                <header>
                    <img src="images/Logo.png" class="mwi-logo" alt="Midwestern Interactive" />
                    <div class="mwi-navigation">
                        <a href="/contact">contact</a>
                    </div>
                </header>
                <div class="mwi-copy-section">
                    <h1><span class="mwi-underline">Heading</span> One</h1>
                        <p>
                            Remove the duplicates in 2 Javascript objects and output the list of distinct names in an unordered list when <a href="#mwi-bottom" onclick="mwi.generateCandidatesList();">this link</a> is clicked. 
                        </p>
                        <p>
                            If the operation completed already, notify the user that this has already been done.
                        </p>
                    </div>
                    <ul id="mwi-list"></ul>
                </div>
            </div>
        </div>
        <a name="mwi-bottom"></a>
    </body>
</html>