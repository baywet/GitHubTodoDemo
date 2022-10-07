using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class BookingStaffMember : BookingStaffMemberBase, IParsable {
        /// <summary>True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member&apos;s availability in their personal calendar in Microsoft 365, before making a booking.</summary>
        public bool? AvailabilityIsAffectedByPersonalCalendar { get; set; }
        /// <summary>The name of the staff member, as displayed to customers. Required.</summary>
        public string DisplayName { get; set; }
        /// <summary>The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.</summary>
        public string EmailAddress { get; set; }
        /// <summary>The role property</summary>
        public BookingStaffRole? Role { get; set; }
        /// <summary>The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.</summary>
        public string TimeZone { get; set; }
        /// <summary>True means the staff member&apos;s availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member&apos;s workingHours property setting.</summary>
        public bool? UseBusinessHours { get; set; }
        /// <summary>The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.</summary>
        public List<BookingWorkHours> WorkingHours { get; set; }
        /// <summary>
        /// Instantiates a new BookingStaffMember and sets the default values.
        /// </summary>
        public BookingStaffMember() : base() {
            OdataType = "#microsoft.graph.bookingStaffMember";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new BookingStaffMember CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new BookingStaffMember();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"availabilityIsAffectedByPersonalCalendar", n => { AvailabilityIsAffectedByPersonalCalendar = n.GetBoolValue(); } },
                {"displayName", n => { DisplayName = n.GetStringValue(); } },
                {"emailAddress", n => { EmailAddress = n.GetStringValue(); } },
                {"role", n => { Role = n.GetEnumValue<BookingStaffRole>(); } },
                {"timeZone", n => { TimeZone = n.GetStringValue(); } },
                {"useBusinessHours", n => { UseBusinessHours = n.GetBoolValue(); } },
                {"workingHours", n => { WorkingHours = n.GetCollectionOfObjectValues<BookingWorkHours>(BookingWorkHours.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteBoolValue("availabilityIsAffectedByPersonalCalendar", AvailabilityIsAffectedByPersonalCalendar);
            writer.WriteStringValue("displayName", DisplayName);
            writer.WriteStringValue("emailAddress", EmailAddress);
            writer.WriteEnumValue<BookingStaffRole>("role", Role);
            writer.WriteStringValue("timeZone", TimeZone);
            writer.WriteBoolValue("useBusinessHours", UseBusinessHours);
            writer.WriteCollectionOfObjectValues<BookingWorkHours>("workingHours", WorkingHours);
        }
    }
}