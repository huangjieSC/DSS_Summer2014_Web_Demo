<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo - Safety Section</title>
  <!--
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/cupertino/jquery-ui.css">
  -->
  <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.css">
  <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.min.css">
  <link rel="stylesheet" href="style_css/style.css">
 <!--
  <link href="css/bootstrap.min.css" rel="stylesheet">
-->

  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
-->
  <script src="js/demo.js"></script>
  <!--
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/bootstrap-tooltip.js"></script>
  <script src="js/popover.js"></script>
  -->


  <style>
   /* .commentAreaBtn{font-size: 14pt; border-radius: 5px; background-color: #C0D4FF; width: 400px;}*/
  </style>
</head>

<body>
  <div id="demoHead" class="top-bar">
      <h1 class="middle3">Child and Family Services Reviews</h1>
      <h1 class="middle3">Onsite Review Instrument and Instructions</h1>
      <div class="top-bar-end"></div>
  </div>

	<div id="tabs" >
		<ul>
      <li><a href="#tabs-0">General Instructions</a></li>
			<li><a href="#tabs-1">Face Sheet</a></li>
			<li><a href="#tabs-2">SAFETY OUTCOME 1</a></li>
			<li><a href="#tabs-3">SAFETY OUTCOME 2</a></li>
      <li><a href="#tabs-4">PERMANENCY OUTCOME 1</a></li>
      <li><a href="#tabs-5">PERMANENCY OUTCOME 2</a></li>
      <li><a href="#tabs-6">WELL-BEING OUTCOME 1</a></li>
      <li><a href="#tabs-7">WELL-BEING OUTCOME 2</a></li>
      <li><a href="#tabs-8">WELL-BEING OUTCOME 3</a></li>
		</ul>

    <div id="tabs-0">
      <header style="text-align: center; ">
        <h2>Children's Bureau</h2>
        <h3>Child and Family Services Reviews</h3>
        <h3>Onsite Review Instrument and Instructions</h3>
        <h3>General Instructions</h3>

         <div>
            <p> The Onsite Review Instrument and Instructions is used to review both foster care and in-home
                services cases during the onsite review component of the Child and Family Services Reviews
                (CFSRs) of state child welfare agencies. In completing the instrument, reviewers will conduct
                case file reviews and case-related interviews with children, parents, foster parents,
                caseworkers, and other professionals involved with the child.</p>
            <p> The instrument is organized into a Face Sheet and three sections.  On the Face Sheet,
                reviewers document general information about a case, such as the type of case. The three
                sections focus on the outcome domains that form the basis of the CFSRs: safety, permanency,
                and child and family well-being.  For each outcome, reviewers collect information on a number
                of “items” related to that outcome.</p>
             <p> Although reviewers use the instrument to review both foster care and in-home services cases,
                they should complete the permanency section only if the case under review is a foster care
                case. If reviewing an in-home services case, reviewers should select Not Applicable as the
                rating for the permanency items.</p>
             <p>For children in foster care, reviewers should consider the safety items (1 through 3) for all
                children in the family, but complete the permanency items (4 through 11) and the child and
                family well-being items (12 through 18) only as they apply to the specific child whose case is
                under review.  For children receiving in-home services, reviewers should apply the safety and
                child and family well-being items to all the children in the family who are residing with, and
                included in services to, the family.</p>

        <h3>Reviewing the Case</h3>
        <p>Reviewers must answer all the questions for each applicable item.  If the question is Not
            Applicable to the case, then NA should be marked for that question.</p>
        <p>Reviewers must indicate the source(s) of the information used to determine their responses to
            the item questions. The instrument provides some instructions on where to find information.
            Reviewers should use their professional judgment to determine how best to gather all the
            relevant information.  Further instructions for answering the questions relating to the individual
            items are provided below the relevant question. Reviewers should read all instructions carefully
            before responding to questions.</p>
        </div>
      </header>
    </div>

    <div id="tabs-1">
			<header style="text-align: center; ">
				<h2>CHILD AND FAMILY SERVICES REVIEWS</h2>
				<h3>ONSITE REVIEW INSTRUMENT</h3>
				<h4>FaceSheet</h4>
				<h4>Case Information</h4>
			</header>


			<div id="accordion">
				<h3>Step 1: Questions A through E</h3>
				<div>
					<h4>Instructions for Questions A through E below:</h4>
					<ul>
						<li>For the local area, use the name that is used by the state for the review. This may be a region rather than a county, or may be multiple counties.</li>
						<li>Enter the case name that is the official name on the case file.</li>
						<li>The period under review is the time frame used for making decisions about the case.</li>
					</ul>

						<p>A. Name of state and county (or local area): <input type="text" name="FS_INS" id="FS_A" size="30"/></p>
						<p>B. Case name: <input type="text" name="FS_INS" id="FS_B" size="30"/></p>
						<p>C. Period under review: <input type="text" name="FS_INS" id="FS_C" size="30"/></p>
						<p>D. Reviewer name(s): <input type="text" name="FS_INS" id="FS_D_RN" size="30"/></p>
						 <p>&nbsp; &nbsp; &nbsp;QA Completed by (name(s)): <input type="text" name="FS_INS" id="FS_D_QACB" size="30"/></p>
						<p>E. Date case reviewed: <input type="text" id="datepicker" name="FS_INS" id="FS_E" size="30"/></p>
				</div>

		    <h3>Step 2: Question F</h3>
				<div>
					<p><span>F.</span> Case participants - complete F1 and F2 tables below:</p>
					<p><span>F1.</span> Child Table</p>
					<h4>Table F1 Instructions:</h4>
					<ul>
            <li>For both foster care cases and in-home services cases, enter the first and last names (first name first) of all
                children in the family as identified in the case file.  If the case is a foster care case, indicate "Yes" next to
                the name of the target child.  It is essential that the target child be clearly identified for all foster care cases.</li>
            <li>Enter the race and ethnicity information as provided in the case file.  If the child is of two or more races, list
                all that are provided in the case file (for example, White and Asian, or White and American Indian).  If you
                learn during the course of the interviews that a child is of a different race or ethnicity than is noted in the file
                or is of two or more races and only one is noted in the file (for example, Non-Hispanic instead of Hispanic,
                or both White and Native American), please change the race or ethnicity identification information
                presented below to reflect the accurate information.</li>
            <li>Select from the following options for ethnicity: Non-Hispanic or Hispanic</li>
            <li>Select from the following options for race:
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- American Indian or Alaskan Native </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Asian </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Native Hawaiian or Other Pacific Islander </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- White </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Unknown or Unable to Determine </p>
            </li>
            <li>Provide the date of birth for all children in the family, even if this is a foster care case.</li>
        	</ul><!--closure of inner ul tag-->
        	<div align="center">
            <h4 align="center">Child Table</h4>
            <table border="1" class="all_table">
              <tr>
                <td align="center">Target Child (Yes/No)</td>
                <td align="center">Child(ren)'s Name(s):</td>
                <td align="center">Race(s) </td>
                <td align="center">Ethnicity</td>
                <td align="center">Date(s) of Birth (MM/DD/YY):</td>
                <td align="center">Gender:</td>
                <td align="center">Interviewed (Yes/No)</td>
              </tr>
              <tr>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C0" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C1" size="30"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C2" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C3" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C4" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C5" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_RO_C6" size="10"/></td>
              </tr>
              <tr>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C0" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C1" size="30"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C2" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C3" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C4" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C5" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R1_C6" size="10"/></td>
              </tr>
              <tr>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C0" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C1" size="30"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C2" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C3" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C4" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C5" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R2_C6" size="10"/></td>
              </tr>
              <tr>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C0" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C1" size="30"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C2" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C3" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C4" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C5" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R3_C6" size="10"/></td>
              </tr>
              <tr>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C0" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C1" size="30"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C2" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C3" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C4" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C5" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C6" size="10"/></td>
              </tr>
              <tr>
                <td><input type="text" name="FS_F1" id="FS_F1_R5_C0" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C1" size="30"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C2" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C3" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C4" size="20"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C5" size="10"/></td>
                <td><input type="text" name="FS_F1" id="FS_F1_R4_C6" size="10"/></td>
              </tr>
            </table>
          </div>

          <div>
            <p><span>F2.</span> Case Participant Table</p>
            <h4>Table F2 Instructions:</h4>
                <ul>
                    <li>In the Name column, for both foster care and in-home services cases, enter the first and last names (first
                        name first) of the key case participants who will be rated throughout the instrument as Mother(s) and
                        Father(s), as well as the names of other people being interviewed in the case.  Refer to the instructions in
                        the CFSR Procedures Manual for more information on whom to consider as case participants.</li>
                    <li>In the Role column, list one of the following options: Mother, Father, Foster Parent, Caseworker, Supervisor,
                        Other.  If Other, specify the type of role.</li>
                    <li>In the Relationship to Child column, explain what child the person is related to and how, and whether he or
                        she is/was living with the child and/or in a caretaking role.  For example: boyfriend of (child name)'s
                        mother, lives in the home and shares caretaking responsibility with mother; biological mother of (children's
                        names) not living in the home, not a caretaker and visits with children infrequently; legal father of (child's
                        name) but does not have any relationship with child. More than one person may be identified for each role.</li>
                    <li>In the Interviewed column, note whether the person has been interviewed regarding the case.</li>
            </ul><!--closure of inner ul tag-->
            <h4 align="center">Case Participant Table</h4>
            <table align="center" border="1">
              <tr>
                  <td align="center">Name</td>
                  <td align="center">Role</td>
                  <td align="center">Relationship to Child  </td>
                  <td align="center">Interviewed (Yes/No)</td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2" id="FS_F2_R0_C0" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R0_C1" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R0_C2" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R0_C3" size="20"/></td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2" id="FS_F2_R1_C0" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R1_C1" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R1_C2" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R1_C3" size="20"/></td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2" id="FS_F2_R2_C0" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R2_C1" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R2_C2" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R2_C3" size="20"/></td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2" id="FS_F2_R3_C0" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R3_C1" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R3_C2" size="20"/></td>
                  <td><input type="text" name="FS_F2" id="FS_F2_R3_C3" size="20"/></td>
              </tr>
            </table>
        </div>

				</div> <!-- end of question F section-->

    <h3>Step3: Question G </h3>
				<div>
					<p><span>G.</span> What is the type of case reviewed (select one type only)?</p>
          <h4>Question G Instructions:</h4>
          <ul>
            <li>The case is a foster care case if the target child was in foster care at any time during the period under review.  A child is considered to be in foster care if the state child welfare agency (hereafter "the agency") has placement and care responsibility for the child.  This includes a child who is placed by the agency with relatives or in other kin-type placements, but the agency maintains placement and care responsibility.  It does not include a child who is living with relatives (or caregivers other than parents) but who is not under the care and placement responsibility of the agency.</li>
            <li>The case is an in-home services case if no child in the family was in foster care at any time during the period under review, and the case was open for at least 45 days.</li>
          </ul><!--closure of inner ul tag-->

          <p> Select the appropriate response:</p>

          <p class="answerStyle">
				    <b>Answer to Question G:
				    </b>
			    </p>

          <input type="radio" id="FS_G_FC" name="FS_G" class="uniformBtn"  class="radio" value="No" ><label for="FS_G_FC" style="widht: 30px; margin-right: 100px;">Foster Care</label>
          <input type="radio" id="FS_G_IHS" name="FS_G" class="uniformBtn" class="radio" value="No"><label  for="FS_G_IHS" style="widht: 30px; margin-right: 100px;">In-Home Services</label>
          <input type="radio" id="FS_G_IHSDAR" name="FS_G" class="uniformBtn" class="radio" value="No"><label  for="FS_G_IHSDAR" style="widht: 30px; margin-right: 100px;">In-Home Services - Differential/Alternative Response</label>
				</div>

		<h3>Step 4: Question H</h3>
				<div>
					<p><span>H.</span> Was this case opened for reasons other than child abuse and neglect?</p>

          <h4>Question H Instructions:</h4>

          <p>Examples of cases opened for reasons other than child abuse or neglect include: (1) cases opened because ofthe child's behavior, including juvenile delinquency, substance abuse, or "child in need of supervision," andthere were no maltreatment concerns in the family; or (2) cases for which the reasons for contact with thefamily were not related to child abuse or neglect.</p>

          <p>Select the appropriate response:</p>
          <p class="answerStyle">
					   Answer to Question H:
					</p>

          <input type="radio" id="FS_H_Y" name="FS_H" class="uniformBtn" class="radio" value="Yes"><label for="FS_H_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
          <input type="radio" id="FS_H_N" name="FS_H" class="uniformBtn" class="radio" value="No"><label for="FS_H_N" style="widht: 30px; margin-right: 100px;">No</label>

				</div> <!-- end of question H section-->

		<h3>Step 5: Question I</h3>
				<div>
					 <p><span>I.</span>  What is the date of most recent case opening for all cases?</p>
            <h4>Question I Instructions:</h4>
            <ul>
                    <li>Using MM/DD/YYYY format, enter the date on which the case was actually opened within the agency.  If a
                        child was on a trial home visit and returned to a foster care placement, it is not considered a "case opening"
                        unless the trial home visit was longer than 6 months and there was no court order extending the trial home
                        visit beyond 6 months.</li>
                    <li>If the family received in-home services before the removal of a child and placement of the child in foster
                        care, and the case was not closed before placement, enter the date on which the case was opened for inhome services.
                        The date of the child's removal from home will be captured in the next item.</li>
            </ul><!--closure of inner ul tag-->

            <p>Select the appropriate response:</p>
            <p class="answerStyle">
				<b>Answer to Question I: &nbsp;&nbsp;
				</b>
				<input type="text" name="FS_I"  id="FS_H_MM" size="10"/>&nbsp;/&nbsp;<input type="text" name="FS_I" id="FS_H_DD" size="10"/>&nbsp;/&nbsp;<input type="text" name="FS_I" id="FS_H_YY" size="10"/>
			</p>
		</div> <!-- end of question I section-->

		<h3>Step 6: Question J</h3>
				<div>
					<p><span>J.</span> What is the date of the child's most recent entry into foster care? </p>
          <h4>Question J Definition</h4>
          <ul>
            <li>"Entry into foster care" refers to a child's removal from his or her normal place of residence and placement in a substitute care setting under the placement and care responsibility of the state or local title IV-B/IV-E agency. Children are considered to have entered foster care if the child has been in substitute care for 24 hours or more.</li>
          </ul><!--closure of inner ul tag-->

          <h4>Question J Instructions:</h4>
          <ul>
            <li>If in Question G, In-Home Services was selected, then J is Not Applicable: </li>
            <li>Using MM/DD/YYYY format, enter the date of the child's most recent entry into foster care.</li>
            <li>If a child was on a trial home visit and returned to a foster care placement, the return is not considered an "entry into foster care" unless the trial home visit was longer than 6 months and there was no court order extending the trial home visit beyond 6 months.</li>
          </ul><!--closure of inner ul tag-->

          <p class="answerStyle">
				    <b>Answer to Question J: &nbsp;&nbsp;
				    </b>
				    <input type="text" name="FS_J" id="FS_J_MM" size="10"/>&nbsp;/&nbsp;
            <input type="text" name="FS_J" id="FS_J_DD" size="10"/>&nbsp;/&nbsp;
            <input type="text" name="FS_J" id="FS_J_YY" size="10"/>&nbsp;/&nbsp;

            <input type="radio" id="FS_J_NA" name="FS_J_RADIO" class="uniformBtn" class="radio" value="No"><label for="FS_J_NA" style="widht: 30px; margin-right: 100px;">NA</label>
			    </p>
		    </div> <!-- end of question J section-->

		<h3>Step 7: Question K</h3>
				<div>
					 <p><span>K.</span> What is the date of discharge from foster care for the most recent foster care episode? </p>
            <h4>Question K Definition</h4>
            <ul>
                    <li>"Discharge from foster care" is defined as the point when the child is no longer in foster care under the care
                        and placement responsibility or supervision of the agency.</li>
            </ul><!--closure of inner ul tag-->
            <h4>Question K Instructions:</h4>
            <ul>
                    <li>If in Question G, Foster Care was selected, but has not yet been discharged, then select Not Yet Discharged.</li>
                    <li>If in Question G, In-Home Services was selected, then K is Not Applicable:</li>
                    <li>Using MM/DD/YYYY format, enter the date of discharge from foster care for the most recent foster care
                        episode.</li>
                    <li>If a child returns home on a trial home visit and the agency retains responsibility or supervision of the child,
                        the child should be considered discharged from foster care only if the trial home visit was longer than 6
                        months, and there was no court order extending the trial home visit beyond 6 months.</li>

            </ul><!--closure of inner ul tag-->

            <p class="answerStyle">
				      <b>Answer to Question K: &nbsp;&nbsp;
				      </b>
				      <input type="text" name="FS_K"  id="FS_K_MM" size="10"/>&nbsp;/&nbsp;
              <input type="text" name="FS_K" id="FS_K_DD" size="10"/>&nbsp;/&nbsp;
              <input type="text" name="FS_K" id="FS_K_YY" size="10"/>&nbsp;/&nbsp;

              <input type="radio" id="FS_K_NYD" name="FS_K_RADIO" class="uniformBtn" class="radio" value="Yes"><label for="FS_K_NYD" style="widht: 30px;">Not Yet Discharged</label>&nbsp;/&nbsp;
              <input type="radio" id="FS_K_NA" name="FS_K_RADIO" class="uniformBtn" class="radio" value="No"><label for="FS_K_NA" style="widht: 30px; margin-right: 100px;">NA</label>

			</p>
		</div> <!-- end of question K section-->

		<h3>Step 8: Question L</h3>
				<div>
					 <p><span>L.</span> What is the date of case closure (for all cases)?</p>
            <h4>Question L Instructions:</h4>
            <ul>
                <li>If the case is still open at the time of review, select "Case not closed by time of review."</li>
                <li>Using MM/DD/YYYY format, enter the date on which the agency officially closed the case.  For foster care cases, this may or may not be the same as the discharge date.</li>
            </ul><!--closure of inner ul tag-->

            <p class="answerStyle">
              <b>Answer to Question L: &nbsp;&nbsp;
				      </b>

              <input type="text" name="FS_L" id="FS_L_MM" size="10"/>&nbsp;/&nbsp;
              <input type="text" name="FS_L" id="FS_L_DD" size="10"/>&nbsp;/&nbsp;
              <input type="text" name="FS_L" id="FS_L_YY" size="10"/>&nbsp;/&nbsp;

              <input type="radio" id="FS_L_CNCBTOR" name="FS_L_RADIO" class="uniformBtn" class="radio" value="No"><label for="FS_L_CNCBTOR" style="widht: 30px; margin-right: 100px;">Case not closed by time of review</label>
			     </p>
		    </div> <!-- end of question L section-->

		<h3>Step 9: Question M</h3>
				<div>
					<p><span>M.</span> What is the reason for agency involvement?</p>
            <h4>M1 Instructions:</h4>
            <ul>
                    <li>Indicate the reason(s) for the agency's involvement with this child or family for the most recent case
                        opening. Select all reasons that apply.</li>
            </ul><!--closure of inner ul tag-->

            <p class="answerStyle">
				<b>Answer to Question M1: &nbsp;&nbsp;
				</b>
			</p>
			<div class="quesMcheck">
                <form action="" method="get" name="form3">
                	<table>
                		<tr>
                			<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_PA" value="PA" />Physical abuse </label>		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_A" value="AB" />Abandonment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_SABC" value="SABC" />Substance abuse by child </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_SA" value="SA" />Sexual abuse </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_MPHOP" value="MPHP" />Mental/physical health of parent </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_DVICH" value="DVCH" />Domestic violence in child's home </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_EM" value="EM" />Emotional maltreatment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_MPHOC" value="MPHCP" />Mental/physical health of child </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_CIJJS" value="CJJS" />Child in juvenile justice system</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_N" value="Neglect" />Neglect (not including medical neglect)</label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_SABP" value="SAP" />Substance abuse by parent(s) </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_O" value="Other" />Other (specify)</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_MN" value="MN" />Medical neglect</label>		</td>
                    		<td>
                    <label><input name="FS_M" type="checkbox" id="FS_M_CB" value="CB" />Child's behavior </label>
                    		</td>
                    	</tr>

                	</table>
                </form>
            </div>

            <h4>M2 Instructions:</h4>
            <ul>
                    <li>Place an asterisk next to the square below that indicates the <b>primary reason</b> the case was opened. It is essential that the primary reason be identified with an <b>asterisk</b>.</li>
            </ul><!--closure of inner ul tag-->

			 <p class="answerStyle">
				<b>Answer to Question M2: &nbsp;&nbsp;
				</b>
			</p>
			<div class="quesMcheck">
                <form action="" method="get" name="form4">
                	<table>
                		<tr>
                			<td>
                    <label><input name="FS_M" type="radio" id="FS_M_PA" value="PA" />Physical abuse </label>		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_A" value="AB" />Abandonment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_SABC" value="SABC" />Substance abuse by child </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_SA"  value="SA" />Sexual abuse </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_MPHOP" value="MPHP" />Mental/physical health of parent </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_DVICH" value="DVCH" />Domestic violence in child's home </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_EM" value="EM" />Emotional maltreatment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_MPHCOP" value="MPHCP" />Mental/physical health of child </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_CIJJS" value="CJJS" />Child in juvenile justice system</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_N" value="Neglect" />Neglect (not including medical neglect)</label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_SABP" value="SAP" />Substance abuse by parent(s) </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_O" value="Other" />Other (specify)</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_MN" value="MN" />Medical neglect</label>		</td>
                    		<td>
                    <label><input name="FS_M" type="radio" id="FS_M_CB" value="CB" />Child's behavior </label>
                    		</td>
                    	</tr>

                	</table>
                </form>
            </div>
		</div> <!-- end of question M section-->

	</div><!-- end of whole accordion -->
</div> <!-- end of tab 1 -->


    <div id="tabs-2">
		<header style="text-align: center;">
			<h2>SECTION I: SAFETY</h2>
			<h3>SAFETY OUTCOME 1: CHILDREN ARE, FIRST AND FOREMOST, PROTECTED FROM ABUSE AND NEGLECT.</h3>
			<!--
      <h4>Item 1: Timelines of Initiating Investigations of Reports of Child Maltreatment</h4>
      -->
		</header>

    <div id="accordionT2">
      <h3>Item 1: Timelines of Initiating Investigations of Reports of Child Maltreatment</h3>
		  <div id="accordion1_1">
			    <h3>Step 1: Purpose of Assessment</h3>
				  <div>
					   <p>To determine whether responses to all accepted child maltreatment reports received during the period under review were initiated, and face-to-face contact with the child made, within the time frames established by agency policies or state statutes.
					</p>
				  </div>

				  <h3>Step 2: Item 1 Applicable Cases</h3>
				  <div>
					   <ul>
						    <li>Cases are applicable for an assessment of this item if an accepted child maltreatment report on any child in the family was received during the period under review. "Accepted" means that the report was assigned to the agency to conduct an assessment or investigation. This includes reports assigned for an "alternative response" assessment. Reports that are screened out are not considered "accepted." "Alternative response" refers to an agency's approach to addressing child maltreatment reports that meet agency criteria for acceptance but at the initial screening do not meet the agency's requirements for a mandated investigation. For example, the agency's policy may be that reports that appear to present low to moderate risk to the child may be referred for a family assessment, rather than an investigation. Under such a response, no determination of child maltreatment is made. The alternative response may include an assessment to determine the safety of the children, the risk of maltreatment, and the family's strengths and needs. The assessment may lead the state agency to provide services to eliminate or lessen the safety concerns and maltreatment risks.

						    </li>
						    <li>Cases are Not Applicable for an assessment of this item if, during the period under review, there were no child maltreatment reports on any child in the family, or if a report was received on a child in the family but it was "screened out"; that is, not referred for an assessment or investigation.

						    </li>
					   </ul>

				      <h4>Is this case applicable?</h4>
				      <p>Select the appropriate response below. <b>If the response is "No," complete question A, then rate the case as Not Applicable in the ratings section and continue to item 2. </b></p>
				      <!--
              <b>Yes</b><input type="radio" id="applicableYES" name="CA" value="Yes">&nbsp; &nbsp; &nbsp; &nbsp;
				      <b>No</b><input type="radio" id="applicableNO" name="CA" value="No">
			         -->

              <form>
            <input type="radio" id="O1_I1_AC_Y" name="O1_I1_AC" class="uniformBtn" class="radio" value="outcome1SA"><label for="O1_I1_AC_Y" style="margin-right: 100px;">Yes</label>
            <input type="radio" id="O1_I1_AC_N" name="O1_I1_AC" class="uniformBtn" class="radio" value="outcome1NOTAch"><label for="O1_I1_AC_N" style="margin-right: 100px;">No</label>
          </form>

				  </div>

          <h3>Step3: Questions </h3>
				  <div>
				      <h3 id="table1">A1. Reports Table</h3>
				      <h3>Table A1 Instructions: </h3>
				      <ul>
					       <li>Complete the following table for all accepted reports received during the period under review.
</li>
					       <li>If the state has policies outlining different priority levels for reports, indicate the priority level that was assigned.
</li>
					       <li>Indicate whether the report was assigned for an investigation or referred for an assessment.
</li>
					       <li>The date assigned for an investigation or assessment is the date the report is assigned to a specific worker to conduct the investigation or assessment.
</li>
					       <li>The date the investigation or assessment was initiated is the date on which the agency made the first attempt to contact the family.
</li>
					       <li>In the last column, report the disposition of the case. If the case was investigated, indicate whether the report was "Substantiated" or "Not Substantiated" (this may be documented in the record as "founded" or "unfounded," or "indicated" or "not indicated"). If the investigation has not been completed as of the time of review, indicate "Investigation Pending." If the case was referred for an assessment, indicate whether it was "opened for services" or "not opened for services." If the assessment has not yet been completed, indicate "assessment still pending."
</li>
				      </ul>

              <p><b>Is table too large to fit in the screen? Click on any empty space outside the table and use right arrow key &rarr; to scroll to the right; use left arrow key &larr; to scroll back to the left.</b></p>

				      <table border="2"  width="400" name="O1_I1_A1">
					       <caption>Reports Table</caption>
					       <tr>
						      <td>Report Date</td>
						      <td>First Name of Child</td>
						      <td>Allegation</td>
						      <td>Priority Level (if applicable) </td>
						      <td>Assessment or Investigation</td>
						      <td>Date Assigned for an Investigation or Assessment </td>
						      <td>Date Investigation or Assessment Initiated</td>
						      <td>Date Investigation or Assessment Initiated</td>
						      <td>Relationship of Alleged Perpetrator to Child </td>
						      <td>Disposition </td>
					     </tr>
					     <tr>
						      <td><input id="O1_I1_A1_RO_CO" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C1" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C2" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C3" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C4" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C5" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C6" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C7" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C8" type="text"></td>
						      <td><input id="O1_I1_A1_RO_C9" type="text"></td>
					     </tr>
					     <tr>
						    <td><input id="O1_I1_A1_R1_CO" type="text"></td>
						<td><input id="O1_I1_A1_R1_C1" type="text"></td>
						<td><input id="O1_I1_A1_R1_C2" type="text"></td>
						<td><input id="O1_I1_A1_R1_C3" type="text"></td>
						<td><input id="O1_I1_A1_R1_C4" type="text"></td>
						<td><input id="O1_I1_A1_R1_C5" type="text"></td>
						<td><input id="O1_I1_A1_R1_C6" type="text"></td>
						<td><input id="O1_I1_A1_R1_C7" type="text"></td>
						<td><input id="O1_I1_A1_R1_C8" type="text"></td>
						<td><input id="O1_I1_A1_R1_C9" type="text"></td>
					</tr>
					<tr>
						<td><input id="O1_I1_A1_R2_CO" type="text"></td>
						<td><input id="O1_I1_A1_R2_C1" type="text"></td>
						<td><input id="O1_I1_A1_R2_C2" type="text"></td>
						<td><input id="O1_I1_A1_R2_C3" type="text"></td>
						<td><input id="O1_I1_A1_R2_C4" type="text"></td>
						<td><input id="O1_I1_A1_R2_C5" type="text"></td>
						<td><input id="O1_I1_A1_R2_C6" type="text"></td>
						<td><input id="O1_I1_A1_R2_C7" type="text"></td>
						<td><input id="O1_I1_A1_R2_C8" type="text"></td>
						<td><input id="O1_I1_A1_R2_C9" type="text"></td>
					</tr>
					<tr>
						<td><input id="O1_I1_A1_R3_CO" type="text"></td>
						<td><input id="O1_I1_A1_R3_C1" type="text"></td>
						<td><input id="O1_I1_A1_R3_C2" type="text"></td>
						<td><input id="O1_I1_A1_R3_C3" type="text"></td>
						<td><input id="O1_I1_A1_R3_C4" type="text"></td>
						<td><input id="O1_I1_A1_R3_C5" type="text"></td>
						<td><input id="O1_I1_A1_R3_C6" type="text"></td>
						<td><input id="O1_I1_A1_R3_C7" type="text"></td>
						<td><input id="O1_I1_A1_R3_C8" type="text"></td>
						<td><input id="O1_I1_A1_R3_C9" type="text"></td>
					</tr>
					<tr>
						<td><input id="O1_I1_A1_R4_CO" type="text"></td>
						<td><input id="O1_I1_A1_R4_C1" type="text"></td>
						<td><input id="O1_I1_A1_R4_C2" type="text"></td>
						<td><input id="O1_I1_A1_R4_C3" type="text"></td>
						<td><input id="O1_I1_A1_R4_C4" type="text"></td>
						<td><input id="O1_I1_A1_R4_C5" type="text"></td>
						<td><input id="O1_I1_A1_R4_C6" type="text"></td>
						<td><input id="O1_I1_A1_R4_C7" type="text"></td>
						<td><input id="O1_I1_A1_R4_C8" type="text"></td>
						<td><input id="O1_I1_A1_R4_C9" type="text"></td>
					</tr>
					<tr>
						<td><input id="O1_I1_A1_R5_CO" type="text"></td>
						<td><input id="O1_I1_A1_R5_C1" type="text"></td>
						<td><input id="O1_I1_A1_R5_C2" type="text"></td>
						<td><input id="O1_I1_A1_R5_C3" type="text"></td>
						<td><input id="O1_I1_A1_R5_C4" type="text"></td>
						<td><input id="O1_I1_A1_R5_C5" type="text"></td>
						<td><input id="O1_I1_A1_R5_C6" type="text"></td>
						<td><input id="O1_I1_A1_R5_C7" type="text"></td>
						<td><input id="O1_I1_A1_R5_C8" type="text"></td>
						<td><input id="O1_I1_A1_R5_C9" type="text"></td>
					</tr>
					<tr>
						<td><input id="O1_I1_A1_R6_C0" type="text"></td>
						<td><input id="O1_I1_A1_R6_C1" type="text"></td>
						<td><input id="O1_I1_A1_R6_C2" type="text"></td>
						<td><input id="O1_I1_A1_R6_C3" type="text"></td>
						<td><input id="O1_I1_A1_R6_C4" type="text"></td>
						<td><input id="O1_I1_A1_R6_C5" type="text"></td>
						<td><input id="O1_I1_A1_R6_C6" type="text"></td>
						<td><input id="O1_I1_A1_R6_C7" type="text"></td>
						<td><input id="O1_I1_A1_R6_C8" type="text"></td>
						<td><input id="O1_I1_A1_R6_C9" type="text"></td>
					</tr>
				</table>

				<p><b>A. </b>In how many of the reports listed in the table was the investigation or assessment NOT initiated in accordance with the state's time frames and requirements for a report of that priority?
				</p>
				<p>
					Enter the appropriate response:
				</p>
				<p class="answerStyle"><b>Answer to Question 1A:
          <input type="text" id="O1_I1_A1" name="O1_I1_A1" value="" class="textbox"></b>
				</p>

				<p>
					Did you choose "No" (case not applicable) in Step 2?
				</p>
				<!--
        <b>Yes</b><input type="radio" id="jumpItem2Yes" name="jump" value="Yes">&nbsp; &nbsp; &nbsp; &nbsp;
				<b>No</b><input type="radio" id="jumpItem2No" name="jump" value="No">
        -->
         <form>
            <input type="radio" id="O1_I1_A_Y"  class="uniformBtn" class="radio" value="outcome1SA"  name="O1_I1_A_AC"><label for="O1_I1_A_Y" style="margin-right: 100px;">Yes</label>
            <input type="radio" id="O1_I1_A_N" class="uniformBtn" class="radio" value="outcome1NOTAch" name="O1_I1_A_AC"><label for="O1_I1_A_N" style="margin-right: 100px;">No</label>
          </form>

				<p><b>B. </b>In how many of the reports in the table was face-to-face contact with the child(ren) who is the subject of the report NOT made in accordance with the state's time frames and requirements for a report of that priority?
				</p>
				<p>
					Enter the appropriate response:
				</p>
				<p class="answerStyle"><b>Answer to Question 1B:
          <input type="text" id="O1_I1_B" name="O1_I1_B" value="" class="textbox"></b>
				</p>


				<p><b>C. </b>For all reports identified in A and B, were the reasons for the delays due to circumstances beyond the control of the agency?
				</p>
				<p id="Item1Comment1"><b>Question 1C Instructions:</b></p>
				<ul>
					<li>If the answers to both questions A and B are zero, the answer to question C should be Not Applicable.
					</li>
					<li>Delays in services provided by organizations or agencies under contract with the agency would not be considered to be beyond the control of the agency. However, where services are provided by another public state or local agency, such as law enforcement, the actions of these agencies may be beyond the control of the child welfare agency.
					</li>
				</ul>
				<p>
					Select the appropriate response:
				</p>
				<p class="answerStyle">
					<b>Answer to Question 1C:
					<!--	Yes<input type="radio" id="item1CYes" value="Yes"  name="item1C" class="radio">
						No<input type="radio" id="item1CNo" value="No"  name="item1C" class="radio">
						NA<input type="radio" id="item1CNA" value="NA"  name="item1C" class="radio">
          -->
					</b>

          <form>
            <input type="radio" id="O1_I1_C_Y" name="O1_I1_C" class="uniformBtn" class="radio" value="outcome1SA"  name="outcome1"><label for="O1_I1_C_Y" style="margin-right: 100px;">Yes</label>
            <input type="radio" id="O1_I1_C_N" name="O1_I1_C" class="uniformBtn" class="radio" value="outcome1NOTAch" name="outcome1"><label for="O1_I1_C_N" style="margin-right: 100px;">No</label>
            <input type="radio" id="O1_I1_C_NA" name="O1_I1_C" class="uniformBtn" class="radio" value="outcome1NA" name="outcome1"><label for="O1_I1_C_NA" style="margin-right: 100px;">NA</label>
          </form>

				


				<p></p>

<!-- BOOTSTRAP try ################################################################################################################  -->
          Explain the reason for any delays related to reports identified in A and B in the narrative field below.
          <!--
          <a href="#Item1Comment1" rel="tooltip" title="The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize. "> <span style="font-size: 14pt;">Mouse over to see how to resize comment area</span></a>
        -->

        <div id="dialog" title="Resizable Area">
          <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize.
          </p>
        </div>
        <button id="comment1" style="display:block; margin: auto;">Click to see how to expand comment area below
        </button>

				
				<textarea style="height:150px; width: 100%;" name="O1_I1_C_EX" id="O1_I1_C_EX" class="explain">
				</textarea>
				<!--
					<input type="button" onclick="test()" value="see what you just typed!">
				-->
				<script>
					/*
					function test(){
						alert($("#item1CExp").val());
					}
					*/
				</script>

				<p id="I1_Rating">
					<b>Item 1 Rating Criteria:</b>
				</p>

        <p>
          <b>Item 1 should be rated as Not Applicable if the response to the question of applicability is No.</b>
        </p>

				<p>
					<b>Item 1 should be rated as a Strength if either of the following applies: </b>
				</p>
				<ul>
					<li><b>The answers to A and B are zero. </b></li>
					<li><b>The answers to A or B are greater than zero, but the answer to C is Yes. </b> </li>
				</ul>

				<p>
					<b>Item 1 should be rated as an Area Needing Improvement if the following applies:</b>
				</p>
				<ul>
					<li><b>The answer to A or B is greater than zero, and the answer to C is No </b></li>
				</ul>

				<p>
					<b>Item 1 Rating (select one): </b>
				</p>
        <form>
            <input type="radio" id="O1_I1_R_S" name="radio" class="uniformBtn" class="radio" value="outcome1SA"  name="OI_I1_R"><label for="O1_I1_R_S" style="margin-right: 100px;">Strength</label>
            <input type="radio" id="O1_I1_R_ANI" name="radio" class="uniformBtn" class="radio" value="outcome1NOTAch" name="OI_I1_R"><label for="O1_I1_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
            <input type="radio" id="O1_I1_R_NA" name="radio" class="uniformBtn" class="radio" value="outcome1NA" name="OI_I1_R"><label for="O1_I1_R_NA" style="margin-right: 100px;">NA</label>
          </form>


				<p id="Item1Comment2">
					<b>Sources of information that informed rating:</b>
				</p>
					<input type="checkbox" id="O1_I1_R_SRC_CF" value="case file"  name="O1_I1_R_SRC" class="checkbox">case file<br>
					<input type="checkbox" id="O1_I1_R_SRC_MI" value="mother interview"  name="O1_I1_R_SRC" class="checkbox">mother interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_FI" value="father interview"  name="O1_I1_R_SRC" class="checkbox">father interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_FPI" value="foster parent interview"  name="O1_I1_R_SRC" class="checkbox">foster parent interview <br>
					<input type="checkbox" id="O1_I1_R_SRC_CI" value="child interview"  name="O1_I1_R_SRC" class="checkbox">child interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_CSI" value="caseworker/supervisor interview"  name="O1_I1_R_SRC" class="checkbox">caseworker/supervisor interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_OI" value="other interview"  name="O1_I1_R_SRC" class="checkbox">other interview<br>

        <!-- ################################################################################################# BOOTSTRAP TRY-->
				<p>
          Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
          <!--
          <a href="#Item1Comment2" rel="tooltip" title="The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize. "> <span style="font-size: 14pt;">Mouse over to see how resize comment area</span></a>
        -->

        <div id="dialog2" title="Resizable Area">
          <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize. </p>
        </div>
        <button id="comment2" style="display:block; margin: auto;">Click to see how to expand comment area below</button>
				


        <textarea style="height:150px; width: 100%;" name="O1_I1_R_EX" id="O1_I1_R_EX" class="explain">
				</textarea>

				</div>

			</div> <!-- end of accordion 1_1 -->

			<h3>RATING SAFETY OUTCOME 1 </h3>
			<div id="accordion1_2">
				<h3>Instructions</h3>
				<div>
					<p>What is the level of outcome achievement that best describes the extent to which this outcome is being or has been achieved, based on the rating for item 1?
					</p>
					<p>
						<b>
							Instructions:
						</b>
					</p>

					<p>Safety Outcome 1 should be rated as Substantially Achieved if the following applies:
					</p>
					<ul>
						<li>Item 1 is rated as a Strength. </li>
					</ul>

					<p>Safety Outcome 1 should be rated as Not Achieved if the following applies:
					</p>
					<ul>
						<li>Item 1 is rated as an Area Needing Improvement. </li>
					</ul>

					<p>Safety Outcome 1 should be rated as Not Applicable if the following applies:
					</p>
					<ul>
						<li>Item 1 is rated as Not Applicable </li>
					</ul>
          <!--

          <button id="outcome1help" style="display:block; margin: auto;" onclick="showItem1Rating();">Click to see item 1 rating you previously chose </button>
          -->

          <div id="outcome1helpDiag" title="Item 1 Rating">
<p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
<button id="outcome1help1" style="display:block; margin: auto;">Click to see item 1 rating you previously chose.</button>

					<p>
						<b>Select the appropriate response:</b><br><br>
					</p>

					<form>
						<input type="radio" id="O1_SA" name="radio" class="uniformBtn" class="radio" value="outcome1SA"  name="O1"><label for="O1_SA" style="margin-right: 100px;">Substantially Achieved</label>
						<input type="radio" id="O1_NAC" name="radio" class="uniformBtn" class="radio" value="outcome1NOTAch" name="O1"><label for="O1_NAC" style="margin-right: 100px;">Not Achieved</label>
						<input type="radio" id="O1_NA" name="radio" class="uniformBtn" class="radio" value="outcome1NA" name="O1"><label for="O1_NA" style="margin-right: 100px;">NA</label>
					</form>
				</div>
		</div> <!--  end of accordion 1_2 -->
  </div> <!-- end of accordionT2 -->
	</div> <!-- end of tab 2 -->


	<div id="tabs-3">
    <header style="text-align: center;">
      <h2>SECTION I: SAFETY</h2>
      <h3>SAFETY OUTCOME 2: CHILDREN ARE SAFELY MAINTAINED IN THEIR HOMES WHENEVER POSSIBLE AND APPROPRIATE.</h3>
    </header>

  <div id="accordionT3">
    <h3>Item 2: Services to Family to Protect Child(ren) in the Home and Prevent Removal or Re-Entry Into Foster Care</h3>
    <div id="accordionI2">

         <h3>Step 1: Purpose of Assessment</h3>
         <div>
        <p>To determine whether, during the period under review, the agency made concerted
            efforts to provide services to the family to prevent children's entry into foster care or re-entry after a
            reunification.
        </p>
      </div>

      <h3>Step 2: Item 2 Applicable Cases</h3>
      <div>
        <p><b>
          A case is applicable for an assessment of this item if it meets at least one of the following criteria:
        </b></p>
        <ul>
          <li>It is an in-home services case and the reviewer determines that there are concerns regarding the safety of at least one child in the family during the period under review.
          </li>
          <li>It is an in-home services case and services were provided for children at risk of foster care placement to remain safely in their homes.
          </li>
          <li>It is a foster care case and the child entered foster care during the period under review due to safety concerns.
          </li>
          <li>It is a foster care case, the child was reunified during the period under review or was returned home on a trial basis, and the reviewer determines that there are concerns regarding the safety of that child in the home.
          </li>
          <li>It is a foster care case, and although the target child entered foster care before the period under review and
                remained in care for the entire period under review, there are other children in the home and the reviewer determines that there are concerns regarding the safety of these children during the period under review.
          </li>
          </ul>

        <h4>Is this case applicable?</h4>

        <p>Select the appropriate response below.<b>If the response is "No," complete question A, then rate the case as Not Applicable in the ratings section and continue to item 3. </b></p>

        <input type="radio" id="O2_I2_AC_Y" name="O2_I2_AC" class="uniformBtn" class="radio" value="Yes"><label for="O2_I2_AC_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_AC_N" name="O2_I2_AC" class="uniformBtn" class="radio" value="No"><label for="O2_I2_AC_N" style="widht: 30px; margin-right: 100px;">No</label>

      </div>

      <h3>Step3: Questions </h3>
      <div>
       <form action="O2_I2_Q_F.php" method="post" id="O2_I2_Q_F">
        <p>
        <span style="font-size: 18pt;"><b>A. </b></span>For the period under review, did the agency make concerted efforts to provide or arrange for appropriate services for the family to protect children and prevent their entry into foster care or re-entry into foster care after a reunification? (Be sure to assess the entire period under review.)
        </p>

        <p><b>
          Question 2A Definitions:
        </b></p>

        <ul>
          <li>"Appropriate services"for purposes of item 2 are those that are provided to, or arranged for, the family withthe explicit goal of ensuring the child's safety. Some examples include: (1) if there are safety issues in thehome due to environmental hazards, homemaking services could be an appropriate safety-related service; (2) if there are safety concerns related to the parent's ability to manage specific child needs or childbehaviors, intensive in-home services could be an appropriate safety-related service; (3) child care services could be a safety-related service in cases where the child was being cared for in an unsafe setting or by an inappropriate caregiver; and (4) if there are safety concerns related to parental substance abuse, substance abuse treatment could be an appropriate safety-related service. If a child needs mental health services, education-related services, or services to address health issues, in most cases these would not be considered relevant to the child's safety if the child remained in the home. Efforts of the agency to meetthese service needs are assessed in other items. </li>

          <li>"Concerted efforts"for purposes of item 2 refers to the following activities: Working to engage families inneeded services, and facilitating a family's access to those services.</li>
        </ul>

          <p><b>
          Question 2A Instructions:
        </b></p>
        <ul>
          <li>In answering question A, focus only on whether the agency made concerted efforts to provide appropriate and relevant services to the family to address the safety issues in the family so that the child could remain in the home or would not re-enter foster care. Concerns about monitoring service participation and safety planning and assessment of progress made will be captured in item 3. </li>

          <li>If the agency removed the child from the home without making concerted efforts to provide services, the answer to question A should be No, even if the agency determined that it was necessary to remove the child for safety reasons. This issue will be addressed in question B. </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle"><b>Answer to Question 2A: </b>
        </p>

        <input type="radio" id="O2_I2_A_Y" name="O2_I2_A" class="uniformBtn" class="radio" value="Yes"><label for="O2_I2_A_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_A_N" name="O2_I2_A" class="uniformBtn" class="radio" value="No"><label for="O2_I2_A_N" style="widht: 30px; margin-right: 100px;">No</label>

        <p>
          If no, explain any concerns in the narrative field below.

        <div id="O2_I2_Diag" title="Resizable Area">
          <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize.
          </p>
        </div>
        <button id="O2_I2_Commt" style="display:block; margin: auto;">Click to see how to expand comment area below
        </button>
     

        <textarea style="height:150px; width: 100%;" id="O2_I2_A_EXP" name="O2_I2_A_EXP" class="explain">
        </textarea>

        <p>
          Did you choose "No" (case not applicable) in Step 2?
        </p>

        <input type="radio" id="O2_I2_JUMP_Y" name="O2_I2_JUMP" class="uniformBtn" class="radio" value="Yes"><label for="O2_I2_JUMP_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_JUMP_N" name="O2_I2_JUMP" class="uniformBtn" class="radio" value="No"><label for="O2_I2_JUMP_N" style="widht: 30px; margin-right: 100px;">No</label>


        <p>
          <span style="font-size: 18pt;"><b>B. </b></span> If, during the period under review, any child was removed from the home without providing or arranging for
          services, was this action necessary to ensure the child’s safety?
        </p>

        <p><b>
          Question 2B Definitions:
        </b></p>

        <ul>
          <li>If the answer to question A is Yes, but, after making efforts to provide services, the child(ren) were removed from the home during the period under review due to safety concerns, the answer to question B should be Not Applicable.
          </li>

          <li>If the child was not removed from the home during the period under review, the answer to question B should be Not Applicable.
          </li>

          <li>In answering question A, focus only on whether the agency made concerted efforts to provide appropriate and relevant services to the family to address the safety issues in the family so that the child could remain in the home or would not re-enter foster care. Concerns about monitoring service participation and safety planning and assessment of progress made will be captured in item 3.
          </li>

          <li>Focus on whether the circumstances of the case suggest that services would not have been able to ensure the child’s safety if the child remained in the home.  If the information indicates that it was necessary to remove the child to ensure the child’s safety, the answer to question B should be Yes.  If the information indicates that services should have been provided to prevent removal but the child was removed without providing those services, this question should be answered No.
          </li>

          <li>  If services should have been offered to protect the child, but were not because those services were not available in the community, the answer to question B should be No.
          </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 2B: </b>
        </p>

        <input type="radio" id="O2_I2_B_Y" name="O2_I2_B" class="uniformBtn" class="radio" value="Yes"><label for="O2_I2_B_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_B_N" name="O2_I2_B" class="uniformBtn" class="radio" value="No"><label for="O2_I2_B_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I2_B_NA" name="O2_I2_B" class="uniformBtn" class="radio" value="NA"><label for="O2_I2_B_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          If no, explain any concerns in the narrative field below.
        </p>
        <textarea style="height:150px; width: 100%;" id="O2_I2_B_EXP" name="O2_I2_B_EXP" class="explain">
        </textarea>

        <p id="I2_Rating">
          <b>
          Item 2 Rating Criteria:
          </b>
        </p>

        <p>
          <b> This item should be rated as a Strength if either of the following applies:</b>
        </p>

        <ul>
          <li><b> The answer to question A is Yes, and the answer to question B is Not Applicable.</b>
          </li>

          <li><b> If the child was not removed from the home during the period under review, the answer to question B should be Not Applicable.</b>
          </li>
        </ul>

        <p>
          <b>
            This item should be rated as an Area Needing Improvement if either of the following applies:
          </b>
        </p>

        <ul>
          <li><b> The answer to question A is No, and the answer to question B is No.</b>
          </li>

          <li><b> The answer to question A is No, and the answer to question B is Not Applicable.</b>
          </li>
        </ul>

        <p>
          <b>
            Item 2 should be rated as Not Applicable if the response to the question of applicability is No.
          </b>
        </p>

        <p class="answerStyle">
          <b>Item 2 Rating (select one): </b><br>
        </p>

        <input type="radio" id="O2_I2_R_S" name="O2_I2_R" class="uniformBtn" class="radio" value="Yes"><label for="O2_I2_R_S" style="widht: 30px; margin-right: 100px;">Strength</label>
        <input type="radio" id="O2_I2_R_ANI" name="O2_I2_R" class="uniformBtn" class="radio" value="No"><label for="O2_I2_R_ANI" style="widht: 30px; margin-right: 100px;">Area Needing Improvement</label>
        <input type="radio" id="O2_I2_R_NA" name="O2_I2_R" class="uniformBtn" class="radio" value="NA"><label for="O2_I2_R_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          <b>
            Sources of information that informed rating:
          </b>
        </p>

        <p>
          <input type="checkbox" id="O2_I2_R_SRC_CF" name="O2_I2_R_SRC[]" value="casefile">case file<br>

          <input type="checkbox" id="O2_I2_R_SRC_MI" name="O2_I2_R_SRC[]" value="motherinterview">mother interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_FI" name="O2_I2_R_SRC[]" value="father interview">father interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_FPI" name="O2_I2_R_SRC[]" value="fosterparentinterview">foster parent interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_CI" name="O2_I2_R_SRC[]" value="childinterview">child interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_CWI" name="O2_I2_R_SRC[]" value="caseworkerinterview">caseworker/supervisor interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_OI" name="O2_I2_R_SRC[]" value="other interview">other interview<br>
        </p>

        <p>
          Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
        </p>

        <textarea style="height:150px; width: 100%;" name="O2_I2_R_EXP" id="O2_I2_R_EXP" class="explain">
        </textarea>
        <input type="submit" value="Send" />
        </form>
      </div>
    </div> <!-- end of accordion I2 -->



    <h3>Item 3: Risk and Safety Assessment and Management</h3>
    <div id="accordionI3">
      <h3>Step 1: Purpose of Assessment</h3>
      <div>
        <p> To determine whether, during the period under review, the agency made concerted efforts to assess and address the risk and safety concerns relating to the child(ren) in their own homes or while in foster care.
        </p>
      </div>

      <h3>Step 2: Item 3 Applicable Cases</h3>
      <div>
        <p>All cases are applicable for an assessment of this item.</p>
      </div>


      <h3>Step3: Questions</h3>
      <div>
        <p>
          <span style="font-size: 18pt;"><b>A1. </b></span>Did any of the following concerns exist  while the case was open for services?
        </p>

        <p>
          <b>
            Question 3A1 Instruction:
          </b>
          <br>
          Select all that apply:<br><br>

          <input type="checkbox" id="O2_I3_A1_1" name="O2_I3_A1" value="item3A1_1">There were maltreatment allegations on the family that were reported to the agency but were inappropriately screened out (based on your judgments).<br>

          <input type="checkbox" id="O2_I3_A1_2" name="O2_I3_A1" value="item3A1_2">There were maltreatment allegations on the family but they were never formally reported or formally investigated.<br>

          <input type="checkbox" id="O2_I3_A1_3" name="O2_I3_A1" value="item3A1_3">There were maltreatment allegations that were not substantiated despite evidence that would supportsubstantiation.<br>
        </p>

        <p>
          <span style="font-size: 18pt;"><b>A. </b></span>If the case was opened during the period under review, did the agency conduct an initial assessment that accurately assessed all risk and safety concerns for the target child in foster care and/or any child(ren) in the family remaining in the home?
        </p>

        <p>
          <b>
            Questions 3A and 3B Definitions:
          </b>
        </p>

        <ul>
          <li> "Risk" is defined as the likelihood that a child will be maltreated in the future.
          </li>

          <li> An assessment of safety is made to determine whether a child is in a safe environment.  A safe environment is one in which there are no threats that pose a danger or, if there are threats, there is a responsible adult in a caregiving role who demonstrates sufficient capacity to protect the child.
          </li>

          <li> "Target child" is defined as the child in a foster care case who is the subject of the case.
          </li>
        </ul>

        <p>
          <b>
            Questions 3A and 3B Instructions:
          </b>
        </p>

        <ul>
          <li> Questions A and B should be answered for the target child in foster care or receiving in-home services and any other children in the family remaining in the home.
          </li>

          <li> In responding to questions A and B, consider any concerns selected in 3A1.</li>

          <li> Question A should be answered Not Applicable if the case was opened before the period under review.
          </li>
        </ul>

        <p>Select the appropriate response:</p>

        <p class="answerStyle">
          <b>Answer to Question 3A: </b>
        </p>

        <input type="radio" id="O2_I3_A_Y" name="O2_I3_A" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_A_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I3_A_N" name="O2_I3_A" class="uniformBtn" class="radio" value="No"><label for="O2_I3_A_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I3_A_NA" name="O2_I3_A" class="uniformBtn" class="radio" value="No"><label for="O2_I3_A_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          If no, explain any concerns in the narrative field below.
          <div id="O2_I3_Diag" title="Resizable Area">
            <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize.
            </p>
          </div>
          <button id="O2_I3_Commt" style="display:block; margin: auto;">Click to see how to expand comment area below
          </button>   

        <textarea style="height:150px; width: 100%;" name="O2_I3_A_EXP" id="O2_I3_A_EXP" class="explain">
        </textarea>

        <p>
          <span style="font-size: 18pt;"><b>B. </b></span>During the period under review, did the agency conduct ongoing assessments that accurately assessed all of the risk and safety concerns for the target child in foster care and/or any child(ren) in the family remaining in the home?
        </p>

        <p>
          <b>
            Question 3B Instructions:
          </b>
        </p>

        <ul>
          <li> In responding to question B, determine whether ongoing assessments (formal or informal) were conducted during the period under review.  If the agency conducted an initial assessment of risk and safety at the onset of the case, but did not assess for risk and safety concerns on an ongoing basis (for example, when there were new allegations of abuse or neglect, changing family conditions, new people coming into the family home or having access to the children, changes to visitation, upon reunification, or at case closure) then the answer to question B should be No.
          </li>

          <li>Note that in some cases, the issue of ongoing assessments may not be relevant because the case was opened for a very short period of time (for example, if the case was opened shortly before the end of the period under review and during the initial assessment the agency determined that there were no risk or safety concerns, then it may be reasonable to conclude that the agency would not have conducted a second risk and safety assessment during the period under review).  In this case, determine whether the agency conducted ongoing assessments of both risk and safety and, if not, whether it should have, given the time frame and circumstances of the case. If you believe that ongoing assessments were not necessary, question B may be answered Not Applicable.
          </li>

          <li> If a case was closed during the period under review, determine whether the agency conducted a risk and safety assessment before closing the case.  If not, the answer to question B should be No.
          </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 3B: </b>
        </p>

        <input type="radio" id="O2_I3_B_Y" name="O2_I3_B" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_B_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I3_B_N" name="O2_I3_B" class="uniformBtn" class="radio" value="No"><label for="O2_I3_B_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I3_B_NA" name="O2_I3_B" class="uniformBtn" class="radio" value="No"><label for="O2_I3_B_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          If no, explain any concerns in the narrative field below.
        </p>

        <textarea style="height:150px; width: 100%;" name="O2_I3_B_EXP" id="O2_I3_B_EXP" class="explain">
        </textarea>

        <p>
          <span style="font-size: 18pt;"><b>C. </b></span> During the period under review, if safety concerns were present, did the agency: (1) develop an appropriate safety plan with the family and (2) continually monitor and update the safety plan as needed, including monitoring family engagement in any safety-related services?
        </p>

        <p>
          <b>
            Questions 3C and 3D Definitions:
          </b>
        </p>

        <ul>
          <li> "Safety plan" refers to a plan that describes strategies developed by the agency and family to ensure that the child(ren) is safe.  Safety plans should address safety threats and how those will be managed/addressed by the caregiver, caregiver capacity to implement the plan and report safety issues to the agency, and family involvement in implementation of the plan.  Safety plans may be separate from or integrated into the case plan.
          </li>
        </ul>

        <p>
          <b>
            Questions 3C and 3D Instructions:
          </b>
        </p>

        <ul>
          <li> Questions C and D are applicable to all In-Home cases and to Foster Care cases in which there are other children remaining in the family home, or the target child in foster care returned home during the period under review.
          </li>

          <li> Questions C and D should be answered Not Applicable if the reviewer determines that during the period under review there were no apparent safety concerns for any child(ren) in the family remaining in the home.
          </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 3C: </b>
        </p>

        <input type="radio" id="O2_I3_C_Y" name="O2_I3_C" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_C_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I3_C_N" name="O2_I3_C" class="uniformBtn" class="radio" value="No"><label for="O2_I3_C_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I3_C_NA" name="O2_I3_C" class="uniformBtn" class="radio" value="No"><label for="O2_I3_C_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          If no, explain any concerns in the narrative field below.
        </p>

        <textarea style="height:150px; width: 100%;" name="O2_I3_C_EXP" id="O2_I3_C_EXP" class="explain">
        </textarea>

        <p>
          <span style="font-size: 18pt;"><b>D1. </b></span> Did any of the following safety-related incidents occur while the case was open for services?
        </p>

        <p>
          <b>
            Question 3D1 Instructions:
          </b>
        </p>

        <p>
          Select all that apply:<br>

          <input type="checkbox" id="O2_I3_D1_1" name="O2_I3_D1" value="item3D1_1"> Recurring maltreatment: There was at least one substantiated or indicated maltreatment report on any child in the family during the period under review AND there was another substantiated report within a 6-month period before or after that report that <b>involved the same or similar circumstances.</b> In determining the similarity of the circumstances, consider the perpetrator of the maltreatment and other individuals involved in the incident.<br><br>
          <input type="checkbox" id="O2_I3_D1_2" name="O2_I3_D1" value="item3D1_2"> Recurring safety concerns: There was at least one maltreatment report involving any child in the family during the period under review that was handled by an alternative response and resulted in opening the case for services to address safety concerns (this decision may have been made by the agency or by a private provider under contract with the agency) AND there was at least one additional maltreatment report within a 6-month period before or after that report that was handled by an alternative response and resulted in a decision to open the case for services<b> to address the same or similar safety concerns </b>(the case may have been opened for services by the agency or by a private provider under contract with the agency). In determining the similarity of the concerns, consider the perpetrator of the maltreatment, other individuals involved in the incident, and the type of safety issues that existed. <br><br>

          <input type="checkbox" id="O2_I3_D1_3" name="O2_I3_D1" value="item3D1_3"> The case was closed while significant safety concerns that were not adequately addressed still existed inthe home.<br><br>

          <input type="checkbox" id="O2_I3_D1_4" name="O2_I3_D1" value="item3D1_4">Other (describe the safety concerns that were not adequately addressed by the agency):<br>

          <!--<textarea style="height:150px; width: 100%;" name="O2_I3_D1_EXP" id="O2_I3_D1_EXP" class="explain"></textarea>
        -->
        </p>

        <p>
          <span style="font-size: 18pt;"><b>D. </b></span> During the period under review, were there safety concerns pertaining to any child(ren) in the family remaining in the home that were not adequately or appropriately addressed by the agency?
        </p>

        <p>
          <b>
            Question 3D Instructions:
          </b>
        </p>

        <ul>
          <li>    Answer No to question D if any of the circumstances in D1 are selected.
          </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 3D: </b>
        </p>

        <input type="radio" id="O2_I3_D_Y" name="O2_I3_D" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_D_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I3_D_N" name="O2_I3_D" class="uniformBtn" class="radio" value="No"><label for="O2_I3_D_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I3_D_NA" name="O2_I3_D" class="uniformBtn" class="radio" value="No"><label for="O2_I3_D_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          <span style="font-size: 18pt;"><b>E1. </b></span>  Were any of the following safety concerns related to visitation present during the period under review?
        </p>

        <p>
          <b>
            Question 3E1 Instructions:
          </b>
        </p>

        <p>
          Select all that apply:<br>

          <input type="checkbox" id="O2_I3_E1_1" name="O2_I3_E1" value="item3E1_1"> Sufficient monitoring of visitation by parents/caretakers or other family members was not ensured.<br>

          <input type="checkbox" id="O2_I3_E1_2" name="O2_I3_E1" value="item3E1_2"> Unsupervised visitation was allowed when it was not appropriate<br>

          <input type="checkbox" id="O2_I3_E1_3" name="O2_I3_E1" value="item3E1_3"> Visitation was court-ordered despite safety concerns that could not be controlled with supervision<br>

          <input type="checkbox" id="O2_I3_E1_4" name="O2_I3_E1" value="item3E1_4">Other (describe the safety concerns that existed with visitation):
          <br>

          <!--
          <textarea style="height:150px; width: 100%;" name="O2_I3_E1_EXP" id="O2_I3_E1_EXP" class="explain">
          </textarea>
        -->
        </p>

        <p>
          <span style="font-size: 18pt;"><b>E. </b></span>  During the period under review, was there a safety concern related to the target child in foster care during visitation with parents/caretakers or other family members?
        </p>

        <p>
          <b>
            Question 3E Instructions:
          </b>
        </p>

        <ul>
          <li>   Answer Yes to question E if any of the circumstances in E1 are selected.
          </li>

          <li>The answer to question E should be Not Applicable if this is not a foster care case.</li>

          <li>If the child does not have visits with parents/caretakers or with other family members, the answer to
question E should be Not Applicable.</li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 3E: </b>
        </p>

        <input type="radio" id="O2_I3_E_Y" name="O2_I3_C" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_E_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I3_E_N" name="O2_I3_C" class="uniformBtn" class="radio" value="No"><label for="O2_I3_E_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I3_E_NA" name="O2_I3_C" class="uniformBtn" class="radio" value="No"><label for="O2_I3_E_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          <span style="font-size: 18pt;"><b>F1. </b></span> Did any of the following concerns exist for the child in at least one foster care placement during the period under review?
        </p>

        <p>
          <b>
            Questions 3F1 and 3F Definition:
          </b>
        </p>

        <ul>
          <li>   Foster parents include pre-adoptive parents and non-licensed relatives providing care to a child under the placement and care responsibility of the state.
          </li>
        </ul>

        <p>
          <b>
            Question 3F1 Instruction:
          </b>
        </p>

        <p>
          Select all that apply:<br>

          <input type="checkbox" id="O2_I3_F1_1" name="O2_I3_F1" value="item3F1_1"> There was a substantiated allegation of maltreatment of the child by a foster parent (including a relative foster parent) or facility staff member that could have been prevented if the agency had taken appropriate actions.<br>

          <input type="checkbox" id="O2_I3_F1_2" name="O2_I3_F1" value="item3F1_2"> There was a critical incident report or other major issue relevant to noncompliance by foster parents or facility staff that could potentially make the child unsafe, and the agency could have prevented it or did not provide an adequate response after it occurred. <br>

          <input type="checkbox" id="O2_I3_F1_3" name="O2_I3_F1" value="item3F1_3"> The child's placement during the period under review presented other risks to the child that are not being addressed, even though no allegation was made and no critical incident reports were filed.<br>

          <input type="checkbox" id="O2_I3_F1_4" name="O2_I3_F1" value="item3F1_4">You discover that there are safety concerns related to the child in the foster home that the agency is unaware of because of inadequate monitoring.<br>

          <input type="checkbox" id="O2_I3_F1_5" name="O2_I3_F1" value="item3F1_5">Other (describe the safety concerns that existed with the child’s foster placement):
                    <br>
          <!--
          <textarea style="height:150px; width: 100%;" name="O2_I3_F1_EXP" id="O2_I3_F1_EXP" class="explain">
          </textarea>
        -->
        </p>

        <p>
          <span style="font-size: 18pt;"><b>F. </b></span>  During the period under review, was there a concern for the target child’s safety related to the foster parents, members of the foster parents’ family, other children in the foster home or facility, or facility staff members that was not adequately or appropriately addressed by the agency?
        </p>

        <p>
          <b>
            Questions 3F Instructions
          </b>
        </p>

        <ul>
          <li> The answer to question F should be Not Applicable if this is not a foster care case.
          </li>

          <li>The answer to question F should be Yes if you determine that, during the period under review, the child was in at least one foster care placement in which he or she was unsafe, and appropriate action was not taken (such as providing closer monitoring of the placement, placing fewer children in the home, providing services to address potential problems or existing problems, or finding a more appropriate placement).  If any concerns are selected in F1, question F should be answered Yes.</li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 3F: </b>
        </p>

        <input type="radio" id="O2_I3_F_Y" name="O2_I3_C" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_F_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I3_F_N" name="O2_I3_C" class="uniformBtn" class="radio" value="No"><label for="O2_I3_F_N" style="widht: 30px; margin-right: 100px;">No</label>
        <input type="radio" id="O2_I3_F_NA" name="O2_I3_C" class="uniformBtn" class="radio" value="No"><label for="O2_I3_F_NA" style="widht: 30px; margin-right: 100px;">NA</label>

        <p>
          <b>
            Item 3 Rating Criteria:
          </b>
        </p>

        <p>
          <b> Item 3 should be rated as a Strength if both of the following apply:</b>
        </p>

        <ul>
          <li><b> The answers to questions A, B, and C are either Yes or Not Applicable, and</b>
          </li>

          <li><b> The answers to questions D, E, and F are either No or Not Applicable.</b>
          </li>
        </ul>

        <p>
          <b>
            Item 3 should be rated as an Area Needing Improvement if either of the following applies:
          </b>
        </p>

        <ul>
          <li><b> The answer to any one of questions A, B, or C is No, or</b>
          </li>

          <li><b> The answer to any one of questions D, E, or F is Yes.</b>
          </li>
        </ul>

        <p>
          <b>
            There are no circumstances under which item 3 could be rated as Not Applicable.
          </b>
        </p>

        <p class="answerStyle">
          <b>Item 3 Rating (select one): </b><br>
        </p>

        <input type="radio" id="O2_I3_R_S" name="O2_I3_R" class="uniformBtn" class="radio" value="Yes"><label for="O2_I3_R_S" style="widht: 30px; margin-right: 100px;">Strength</label>
        <input type="radio" id="O2_I3_R_ANI" name="O2_I3_R" class="uniformBtn" class="radio" value="No"><label for="O2_I3_R_ANI" style="widht: 30px; margin-right: 100px;">Area Needing Improvement</label>

        <p>
          <b>
            Sources of information that informed rating:
          </b>
        </p>

        <p>
          <input type="checkbox" id="O2_I3_R_SRC_CF" name="O2_I3_R_SRC" value="casefile">case file<br>

          <input type="checkbox" id="O2_I3_R_SRC_MI" name="O2_I3_R_SRC" value="motherinterview">mother interview<br>

          <input type="checkbox" id="O2_I3_R_SRC_FI" name="O2_I3_R_SRC" value="father interview">father interview<br>

          <input type="checkbox" id="O2_I3_R_SRC_FPI" name="O2_I3_R_SRC" value="fosterparentinterview">foster parent interview<br>

          <input type="checkbox" id="O2_I3_R_SRC_CI" name="O2_I3_R_SRC" value="childinterview">child interview<br>

          <input type="checkbox" id="O2_I3_R_SRC_CWI" name="O2_I3_R_SRC" value="caseworkerinterview">caseworker/supervisor interview<br>

          <input type="checkbox" id="O2_I3_R_SRC_OI" name="O2_I3_R_SRC" value="other interview">other interview<br>
        </p>

        <p>
          Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
        </p>

        <textarea style="height:150px; width: 100%;" name="O2_I3_R_EXP" id="O2_I3_R_EXP" class="explain">
        </textarea>
      </div>

    </div> <!-- end of accordion I3 -->


    <h3>RATING SAFETY OUTCOME 2</h3>
    <div id="accordionOUT2">
        <h3>Step 1: Instructions</h3>
        <div>
            <h4> What is the level of outcome achievement that best describes the extent to which this outcome is being or has been achieved, based on the ratings for items 2 and 3?
            </h4>

            <p>Safety Outcome 2 should be rated as Substantially Achieved if either of the following applies:
            </p>

            <ul>
              <li> Items 2 and 3 are rated as Strengths.
              </li>

              <li> Item 2 is rated as Not Applicable and Item 3 is rated as a Strength.
              </li>
            </ul>

            <p>
              Safety Outcome 2 should be rated as Partially Achieved if the following applies:
            </p>

            <ul>
              <li> One of the two items is rated as a Strength and the other as an Area Needing Improvement.
              </li>
            </ul>

            <p>
              Safety Outcome 2 should be rated as Not Achieved if either of the following applies:
            </p>

            <ul>
              <li> Items 2 and 3 are rated as Areas Needing Improvement.
              </li>

              <li> Item 2 is rated as Not Applicable and Item 3 is rated as an Area Needing Improvement.
              </li>
            </ul>

            <div id="outcome2helpDiag" title="Item 2 & 3 Ratings">
              <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
            </div>
            <button id="outcome2help1" style="display:block; margin: auto;">
              Click to see item 2 and item 3 rating you previously chose.
            </button>
        </div>

        <h3>Step 2: Rating Answer</h3>
        <div>
            <p><b>Select the appropriate response:</b><br><br></p>

            <form>
              <input type="radio" id="O2_SA" class="uniformBtn" class="radio" value="outcome2SA"  name="O2"><label for="O2_SA" style="widht: 30px; margin-right: 100px;">Substantially Achieved</label>

              <input type="radio" id="O2_PA"  class="uniformBtn" class="radio" value="outcome2PA" name="O2"><label for="O2_PA" style="widht: 30px;margin-right: 100px;">Partially Achieved</label>

              <input type="radio" id="O2_NA" class="uniformBtn" class="radio" value="outcome2NA" name="O2"><label for="O2_NA" style="widht: 30px;margin-right: 100px;">Not Achieved</label>
            </form>
        </div>

    </div> <!-- end of accordion OUT2 -->

  </div> <!--  end of accordion T3 -->
  </div> <!-- end of tab 3 -->

  <div id="tabs-4">
      <header style="text-align: center; ">
        <h2>Under construction</h2>
  </div>

  <div id="tabs-5">
      <header style="text-align: center; ">
        <h2>Under construction</h2>
  </div>

  <div id="tabs-6">
      <header style="text-align: center; ">
       <h2>Under construction</h2>
  </div>

  <div id="tabs-7">
      <header style="text-align: center; ">
        <h2>Under construction</h2>
  </div>

  <div id="tabs-8">
      <header style="text-align: center; ">
        <h2>Under construction</h2>
  </div>

</div> <!-- end of tabs -->

</body>
</html>